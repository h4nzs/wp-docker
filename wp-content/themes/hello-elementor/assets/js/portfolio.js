jQuery(document).ready(function($) {
    let currentType = 'image'; // 'image' or 'video'
    let currentCategory = 'semua';
    let currentSearch = '';
    let currentSort = 'newest_post';
    let currentOffset = 0;
    let currentSeed = Math.floor(Math.random() * 999999) + 1;

    const $grid = $('#portfolio-grid-container');
    const $loadMoreBtn = $('#portfolio-load-more');

    function fetchPortfolios(isAppend = false) {
        if (!isAppend) {
            currentOffset = 0;
            currentSeed = Math.floor(Math.random() * 999999) + 1;
            $grid.css('opacity', '0.5');
        }

        $.ajax({
            url: portfolio_ajax_obj.ajax_url,
            type: 'POST',
            data: {
                action: 'portfolio_content_ajax',
                type: currentType,
                category: currentCategory,
                search: currentSearch,
                sort: currentSort,
                offset: currentOffset,
                seed: currentSeed
            },
            success: function(response) {
                $grid.css('opacity', '1');
                if (isAppend) {
                    if (response.trim() === '') {
                        $loadMoreBtn.hide();
                    } else {
                        $grid.append(response);
                        currentOffset += 12;
                    }
                } else {
                    $grid.html(response);
                    currentOffset = 12;
                    $loadMoreBtn.show();
                }

                // If response is shorter or empty, hide the load more button
                let newItemsCount = $(response).filter('.porto-card').length;
                if (newItemsCount < 12) {
                    $loadMoreBtn.hide();
                } else {
                    $loadMoreBtn.show();
                }
            },
            error: function() {
                $grid.css('opacity', '1');
            }
        });
    }

    // Toggle Foto / Video
    $('.porto-toggle-btn').on('click', function(e) {
        e.preventDefault();
        $('.porto-toggle-btn').removeClass('active');
        $(this).addClass('active');

        let isVideo = $(this).text().toLowerCase().includes('video');
        currentType = isVideo ? 'video' : 'image';
        fetchPortfolios(false);
    });

    // Category Filters
    $('.porto-filter-btn').on('click', function(e) {
        e.preventDefault();
        $('.porto-filter-btn').removeClass('active');
        $(this).addClass('active');

        currentCategory = $(this).data('category') || 'semua';
        fetchPortfolios(false);
    });

    // Search trigger
    $('.porto-search-btn').on('click', function(e) {
        e.preventDefault();
        currentSearch = $('.porto-search-input').val();
        fetchPortfolios(false);
    });

    $('.porto-search-input').on('keypress', function(e) {
        if (e.which === 13) { // Enter key
            e.preventDefault();
            currentSearch = $(this).val();
            fetchPortfolios(false);
        }
    });

    // Sort select
    $('.porto-sort-select').on('change', function() {
        currentSort = $(this).val();
        fetchPortfolios(false);
    });

    // Load More button
    $loadMoreBtn.on('click', function(e) {
        e.preventDefault();
        fetchPortfolios(true);
    });

    // Initial Fetch
    fetchPortfolios(false);

    // Scroll Reveal Animation (IntersectionObserver)
    const reveals = document.querySelectorAll('.reveal, .reveal-zoom');
    const revealOptions = {
        threshold: 0.15,
        rootMargin: "0px 0px -50px 0px"
    };
    
    const revealOnScroll = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, revealOptions);
    
    reveals.forEach(reveal => {
        revealOnScroll.observe(reveal);
    });
});
