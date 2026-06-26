/* DIRECTORY INTERACTIVE MAP & PANEL LOGIC */
jQuery(document).ready(function($) {
  /* ============================================================
     BASE 20 REAL PERSONNEL
  ============================================================ */
  const BASE_PERSONNEL = [
    { name:'isai-0071-F', lat:-6.2250, lng:106.9000, location:'Jakarta Timur, DKI Jakarta', tags:['Fotografer'], badge:'1-3Jt', icon:'fa-camera', gender:'Male', province:'DKI Jakarta', city:'Jakarta Timur', photo:'https://images.unsplash.com/photo-1583195764036-6dc248ac07d9?w=600&q=80', age:30, porto:0 },
    { name:'Dani-0069-FV', lat:-6.1751, lng:106.8272, location:'Jakarta Pusat, DKI Jakarta', tags:['Fotografer','Videografer'], badge:'< 1Jt', icon:'fa-video', gender:'Male', province:'DKI Jakarta', city:'Jakarta Pusat', photo:'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?w=600&q=80', age:39, porto:3 },
    { name:'Krisnhha-0068-D', lat:-7.1603, lng:112.6566, location:'Gresik, Jawa Timur', tags:['Drone'], badge:'1-3Jt', icon:'fa-paper-plane', gender:'Male', province:'Jawa Timur', city:'Gresik', photo:'https://images.unsplash.com/photo-1473968512647-3e447244af8f?w=600&q=80', age:20, porto:1 },
    { name:'Deni-0067-FVDE', lat:-6.9175, lng:107.6191, location:'Bandung, Jawa Barat', tags:['Fotografer','Videografer','Drone','Editor'], badge:'1-3Jt', icon:'fa-video', gender:'Male', province:'Jawa Barat', city:'Bandung', photo:'https://images.unsplash.com/photo-1516214104703-d2a1462c0ce6?w=600&q=80', age:null, porto:0 },
    { name:'gunawan-0066-FVE', lat:-6.1104, lng:106.1622, location:'Serang, Banten', tags:['Fotografer','Videografer','Editor'], badge:'< 1Jt', icon:'fa-camera', gender:'Male', province:'Banten', city:'Serang', photo:null, age:22, porto:0 },
    { name:'Ali-0065-FVDA', lat:-6.5971, lng:106.7986, location:'Bogor, Jawa Barat', tags:['Fotografer','Videografer','Drone','Animator'], badge:'1-3Jt', icon:'fa-paper-plane', gender:'Male', province:'Jawa Barat', city:'Bogor', photo:'https://images.unsplash.com/photo-1543269664-7eef42226a21?w=600&q=80', age:41, porto:0 },
    { name:'Rania-0064-FE', lat:-6.2088, lng:106.8456, location:'Jakarta Selatan, DKI Jakarta', tags:['Fotografer','Editor'], badge:'1-3Jt', icon:'fa-camera', gender:'Female', province:'DKI Jakarta', city:'Jakarta Selatan', photo:'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=600&q=80', age:27, porto:5 },
    { name:'Budi-0063-VD', lat:-7.2575, lng:112.7521, location:'Surabaya, Jawa Timur', tags:['Videografer','Drone'], badge:'1-3Jt', icon:'fa-video', gender:'Male', province:'Jawa Timur', city:'Surabaya', photo:'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&q=80', age:34, porto:7 },
    { name:'Sari-0062-FVE', lat:-8.6705, lng:115.2126, location:'Denpasar, Bali', tags:['Fotografer','Videografer','Editor'], badge:'3-5Jt', icon:'fa-camera', gender:'Female', province:'Bali', city:'Denpasar', photo:'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=600&q=80', age:29, porto:12 },
    { name:'Hendra-0061-D', lat:-7.0051, lng:110.4381, location:'Semarang, Jawa Tengah', tags:['Drone'], badge:'1-3Jt', icon:'fa-paper-plane', gender:'Male', province:'Jawa Tengah', city:'Semarang', photo:'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=600&q=80', age:31, porto:3 },
    { name:'Maya-0060-FV', lat:3.5896, lng:98.6736, location:'Medan, Sumatera Utara', tags:['Fotografer','Videografer'], badge:'< 1Jt', icon:'fa-camera', gender:'Female', province:'Sumatera Utara', city:'Medan', photo:'https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?w=600&q=80', age:25, porto:2 },
    { name:'Rizky-0059-FVDE', lat:-7.7956, lng:110.3695, location:'Yogyakarta', tags:['Fotografer','Videografer','Drone','Editor'], badge:'3-5Jt', icon:'fa-video', gender:'Male', province:'DI Yogyakarta', city:'Yogyakarta', photo:'https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?w=600&q=80', age:28, porto:9 },
    { name:'Nadia-0058-FE', lat:-6.3021, lng:107.3008, location:'Bekasi, Jawa Barat', tags:['Fotografer','Editor'], badge:'1-3Jt', icon:'fa-camera', gender:'Female', province:'Jawa Barat', city:'Bekasi', photo:'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=600&q=80', age:23, porto:4 },
    { name:'Fajar-0057-VDA', lat:-7.5755, lng:110.8243, location:'Solo, Jawa Tengah', tags:['Videografer','Drone','Animator'], badge:'1-3Jt', icon:'fa-paper-plane', gender:'Male', province:'Jawa Tengah', city:'Solo', photo:'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=600&q=80', age:35, porto:6 },
    { name:'Putri-0056-F', lat:-6.2615, lng:106.9991, location:'Bekasi, Jawa Barat', tags:['Fotografer'], badge:'< 1Jt', icon:'fa-camera', gender:'Female', province:'Jawa Barat', city:'Bekasi', photo:'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=600&q=80', age:21, porto:1 },
    { name:'Wahyu-0055-VE', lat:-8.1085, lng:114.3658, location:'Banyuwangi, Jawa Timur', tags:['Videografer','Editor'], badge:'1-3Jt', icon:'fa-video', gender:'Male', province:'Jawa Timur', city:'Banyuwangi', photo:'https://images.unsplash.com/photo-1552058544-f2b08422138a?w=600&q=80', age:33, porto:5 },
    { name:'Citra-0054-FVD', lat:-5.1477, lng:119.4327, location:'Makassar, Sulawesi Selatan', tags:['Fotografer','Videografer','Drone'], badge:'1-3Jt', icon:'fa-paper-plane', gender:'Female', province:'Sulawesi Selatan', city:'Makassar', photo:'https://images.unsplash.com/photo-1509967419530-da38b4704bc6?w=600&q=80', age:26, porto:3 },
    { name:'Eko-0053-FVDE', lat:-6.1944, lng:106.8229, location:'Jakarta Barat, DKI Jakarta', tags:['Fotografer','Videografer','Drone','Editor'], badge:'3-5Jt', icon:'fa-video', gender:'Male', province:'DKI Jakarta', city:'Jakarta Barat', photo:'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=600&q=80', age:38, porto:15 },
    { name:'Leni-0052-F', lat:-0.9191, lng:119.8707, location:'Palu, Sulawesi Tengah', tags:['Fotografer'], badge:'< 1Jt', icon:'fa-camera', gender:'Female', province:'Sulawesi Tengah', city:'Palu', photo:'https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?w=600&q=80', age:24, porto:0 },
    { name:'Arif-0051-VDA', lat:-7.9839, lng:112.6214, location:'Malang, Jawa Timur', tags:['Videografer','Drone','Animator'], badge:'1-3Jt', icon:'fa-paper-plane', gender:'Male', province:'Jawa Timur', city:'Malang', photo:'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=600&q=80', age:30, porto:8 }
  ];

  /* ============================================================
     GENERATE 45 MORE ENTRIES (total ~65)
  ============================================================ */
  (function() {
    const names = ['Agus','Bagas','Cahyo','Dita','Elsa','Fauzi','Gita','Hafiz','Irma','Jihan','Kurnia','Oki','Tono','Umar','Vina','Xandra','Yogi','Zahra','Ardi','Guntur','Indra','Joko','Dewi'];
    const genderMap = {Agus:'Male',Bagas:'Male',Cahyo:'Male',Dita:'Female',Elsa:'Female',Fauzi:'Male',Gita:'Female',Hafiz:'Male',Irma:'Female',Jihan:'Female',Kurnia:'Male',Oki:'Male',Tono:'Male',Umar:'Male',Vina:'Female',Xandra:'Female',Yogi:'Male',Zahra:'Female',Ardi:'Male',Guntur:'Male',Indra:'Male',Joko:'Male',Dewi:'Female'};
    const skillCombos = [
      {tags:['Fotografer'],icon:'fa-camera'},
      {tags:['Videografer'],icon:'fa-video'},
      {tags:['Drone'],icon:'fa-paper-plane'},
      {tags:['Editor'],icon:'fa-film'},
      {tags:['Fotografer','Videografer'],icon:'fa-video'},
      {tags:['Fotografer','Editor'],icon:'fa-camera'},
      {tags:['Videografer','Drone'],icon:'fa-paper-plane'},
      {tags:['Fotografer','Videografer','Editor'],icon:'fa-video'},
      {tags:['Videografer','Drone','Animator'],icon:'fa-paper-plane'},
      {tags:['Fotografer','Videografer','Drone'],icon:'fa-paper-plane'},
      {tags:['Fotografer','Videografer','Drone','Editor'],icon:'fa-video'},
      {tags:['Fotografer','Videografer','Drone','Animator'],icon:'fa-paper-plane'},
      {tags:['Videografer','Editor'],icon:'fa-video'},
      {tags:['Fotografer','Videografer','Drone','Editor'],icon:'fa-video'}
    ];
    const cityPool = [
      {city:'Palembang',province:'Sumatera Selatan',lat:-2.9761,lng:104.7754},
      {city:'Pekanbaru',province:'Riau',lat:0.5071,lng:101.4478},
      {city:'Padang',province:'Sumatera Barat',lat:-0.9198,lng:100.3531},
      {city:'Jambi',province:'Jambi',lat:-1.6101,lng:103.6131},
      {city:'Bengkulu',province:'Bengkulu',lat:-3.8004,lng:102.2655},
      {city:'Bandar Lampung',province:'Lampung',lat:-5.4294,lng:105.2610},
      {city:'Pontianak',province:'Kalimantan Barat',lat:-0.0263,lng:109.3425},
      {city:'Balikpapan',province:'Kalimantan Timur',lat:-1.2654,lng:116.8312},
      {city:'Samarinda',province:'Kalimantan Timur',lat:-0.5022,lng:117.1536},
      {city:'Banjarmasin',province:'Kalimantan Selatan',lat:-3.3194,lng:114.5908},
      {city:'Palangkaraya',province:'Kalimantan Tengah',lat:-2.2161,lng:113.9135},
      {city:'Manado',province:'Sulawesi Utara',lat:1.4748,lng:124.8421},
      {city:'Gorontalo',province:'Gorontalo',lat:0.5435,lng:123.0595},
      {city:'Kendari',province:'Sulawesi Tenggara',lat:-3.9985,lng:122.5129},
      {city:'Mataram',province:'Nusa Tenggara Barat',lat:-8.5833,lng:116.1167},
      {city:'Kupang',province:'Nusa Tenggara Timur',lat:-10.1771,lng:123.6070},
      {city:'Ambon',province:'Maluku',lat:-3.6954,lng:128.1814},
      {city:'Jayapura',province:'Papua',lat:-2.5337,lng:140.7181},
      {city:'Sorong',province:'Papua Barat',lat:-0.8617,lng:131.2520},
      {city:'Ternate',province:'Maluku Utara',lat:0.7833,lng:127.3667},
      {city:'Mamuju',province:'Sulawesi Barat',lat:-2.6750,lng:118.8867},
      {city:'Madiun',province:'Jawa Timur',lat:-7.6298,lng:111.5239},
      {city:'Depok',province:'Jawa Barat',lat:-6.4025,lng:106.7942},
      {city:'Tangerang',province:'Banten',lat:-6.1781,lng:106.6300},
      {city:'Jakarta Utara',province:'DKI Jakarta',lat:-6.1382,lng:106.8663}
    ];
    const badges = ['< 1Jt','1-3Jt','1-3Jt','1-3Jt','3-5Jt','3-5Jt','5Jt+'];
    const malePhotos = [
      'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=600&q=80',
      'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=600&q=80',
      'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=600&q=80',
      'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&q=80',
      'https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?w=600&q=80',
      'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=600&q=80',
      'https://images.unsplash.com/photo-1552058544-f2b08422138a?w=600&q=80',
      'https://images.unsplash.com/photo-1543269664-7eef42226a21?w=600&q=80',
      'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?w=600&q=80',
      'https://images.unsplash.com/photo-1516214104703-d2a1462c0ce6?w=600&q=80',
      'https://images.unsplash.com/photo-1473968512647-3e447244af8f?w=600&q=80',
      'https://images.unsplash.com/photo-1583195764036-6dc248ac07d9?w=600&q=80'
    ];
    const femalePhotos = [
      'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=600&q=80',
      'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=600&q=80',
      'https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?w=600&q=80',
      'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=600&q=80',
      'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=600&q=80',
      'https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?w=600&q=80',
      'https://images.unsplash.com/photo-1509967419530-da38b4704bc6?w=600&q=80'
    ];

    let id = 50;
    let ni = 0, ci = 0, ski = 0, bi = 0, mpi = 0, fpi = 0;

    for (let i = 0; i < 45; i++) {
      const firstName = names[ni % names.length];
      const gender = genderMap[firstName];
      const skill = skillCombos[ski % skillCombos.length];
      const cityEntry = cityPool[ci % cityPool.length];
      const badge = badges[bi % badges.length];
      const skillCode = skill.tags.map(t=>({Fotografer:'F',Videografer:'V',Drone:'D',Editor:'E',Animator:'A'}[t])).join('');
      const name = `${firstName}-00${String(id).padStart(2,'0')}-${skillCode}`;
      const porto = [0,0,1,2,3,4,5,6,7,8,0,1,2,3][i % 14];
      const age = 19 + (i * 7 % 27);
      const photo = gender === 'Male' ? malePhotos[mpi % malePhotos.length] : femalePhotos[fpi % femalePhotos.length];
      const latJitter = (i % 3 - 1) * 0.04;
      const lngJitter = (i % 5 - 2) * 0.04;

      BASE_PERSONNEL.push({
        name, lat: cityEntry.lat + latJitter, lng: cityEntry.lng + lngJitter,
        location: `${cityEntry.city}, ${cityEntry.province}`,
        tags: skill.tags, badge, icon: skill.icon, gender,
        province: cityEntry.province, city: cityEntry.city,
        photo, age, porto
      });

      id--; ni++; ci++; ski++; bi++;
      if (gender === 'Male') mpi++; else fpi++;
    }
  })();

  const personnelData = BASE_PERSONNEL;

  /* ============================================================
     PORTFOLIO IMAGES
  ============================================================ */
  const portoImages = [
    'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=400&q=80',
    'https://images.unsplash.com/photo-1540039155733-5bb30b53aa14?w=400&q=80',
    'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?w=400&q=80',
    'https://images.unsplash.com/photo-1506157786151-b8491531f063?w=400&q=80',
    'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&q=80'
  ];

  /* ============================================================
     HELPERS
  ============================================================ */
  function getTagClass(tag){return{Fotografer:'tag-foto',Videografer:'tag-video',Drone:'tag-drone',Editor:'tag-editor',Animator:'tag-animator'}[tag]||'tag-foto';}
  function safeId(name){return 'acc-'+name.replace(/[^a-zA-Z0-9_-]/g,'_');}

  /* ============================================================
     BUILD ACCORDION HTML
  ============================================================ */
  function buildAccordionHTML(p){
    const avatarHTML=p.photo
      ?`<img src="${p.photo}" alt="${p.name}" loading="lazy" onerror="this.parentNode.innerHTML='<div class=\\'avatar-placeholder\\'><i class=\\'fas fa-user\\'></i></div>'">`
      :`<div class="avatar-placeholder"><i class="fas fa-user"></i></div>`;
    const tagsHTML=p.tags.map(t=>`<span class="tag-chip ${getTagClass(t)}">${t}</span>`).join('');
    const fullPhotoHTML=p.photo
      ?`<img src="${p.photo}" alt="${p.name}" loading="lazy" style="width:100%;height:100%;object-fit:cover;">`
      :`<div style="display:flex;align-items:center;justify-content:center;width:100%;height:100%;"><i class="fas fa-user" style="color:var(--text-muted);font-size:26px;"></i></div>`;
    const ageText=(p.age!==null&&p.age!==undefined)?`${p.age} tahun`:'Usia tidak tertera';
    let portoHTML;
    if(p.porto>0){
      const thumbs=Array.from({length:Math.min(p.porto,6)}).map((_,i)=>`<div class="portfolio-thumb"><img src="${portoImages[i%portoImages.length]}" alt="Karya ${i+1}" loading="lazy"></div>`).join('');
      portoHTML=`<div class="portfolio-grid">${thumbs}</div>`;
    }else{
      portoHTML=`<div class="portfolio-fallback"><i class="fas fa-image"></i><p>Belum ada karya</p></div>`;
    }
    return `
  <div class="accordion-item" id="${safeId(p.name)}" data-name="${p.name}" data-tags='${JSON.stringify(p.tags)}' data-gender="${p.gender}" data-province="${p.province}" data-city="${p.city}">
    <div class="accordion-header" tabindex="0" role="button" aria-expanded="false">
      <div class="accordion-header-left">
        <div class="accordion-avatar-wrap">${avatarHTML}</div>
        <div class="accordion-identity">
          <span class="accordion-name">${p.name}</span>
          <div class="pers-tags">${tagsHTML}</div>
        </div>
      </div>
      <div class="accordion-header-right">
        <div class="pers-badge">${p.badge}</div>
        <button class="accordion-map-btn" title="Lihat di peta" data-name="${p.name}"><i class="fas fa-map-marker-alt"></i></button>
        <button class="accordion-toggle-btn"><i class="fas fa-chevron-down"></i></button>
      </div>
    </div>
    <div class="accordion-body">
      <div class="accordion-body-inner">
        <div class="accordion-content-grid">
          <div class="accordion-profile-left">
            <div class="accordion-profile-photo-wrap">${fullPhotoHTML}</div>
            <div class="accordion-profile-details">
              <div class="accordion-detail-item"><i class="fas fa-map-marker-alt"></i><span>${p.location}</span></div>
              <div class="accordion-detail-item"><i class="fas fa-birthday-cake"></i><span>${ageText}</span></div>
            </div>
          </div>
          <div class="accordion-profile-right">
            <div>
              <h4 class="accordion-section-title">Karya Portofolio</h4>
              <div style="font-size:11px;color:var(--text-dim);margin-bottom:7px;">${p.porto} karya</div>
              ${portoHTML}
            </div>
            <div class="accordion-actions">
              <a href="https://wa.me/6285771002233" class="accordion-btn-wa" target="_blank" rel="noopener">KONSULTASI WA</a>
              <a href="#" class="accordion-btn-profile">LIHAT PROFIL</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>`;
  }

  /* ============================================================
     INIT ACCORDION
  ============================================================ */
  const accordionList=document.getElementById('accordion-list');
  const emptyState=document.getElementById('empty-state');
  
  if (accordionList) {
    personnelData.forEach(p=>{
      const w=document.createElement('div');
      w.innerHTML=buildAccordionHTML(p).trim();
      accordionList.appendChild(w.firstElementChild);
    });
  }

  /* ============================================================
     MAP INIT
  ============================================================ */
  const mapElement = document.getElementById('map');
  if (mapElement) {
    const map=L.map('map',{center:[-2.5,118],zoom:5,zoomControl:false,attributionControl:false});
    L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png',{maxZoom:19,subdomains:'abcd'}).addTo(map);
    L.control.zoom({position:'bottomright'}).addTo(map);
    L.control.attribution({prefix:'<a href="https://carto.com/attribution" style="color:#555">&copy; CARTO</a>'}).addTo(map);

    function createPinIcon(p,cls=''){
      return L.divIcon({className:'',html:`<div class="custom-map-pin ${cls}"><i class="fas ${p.icon||'fa-camera'}"></i></div>`,iconSize:[34,34],iconAnchor:[17,34],popupAnchor:[0,-34]});
    }

    function buildPopupHTML(p){
      return `<div class="popup-inner"><div class="popup-name">${p.name}</div><div class="popup-location"><i class="fas fa-map-marker-alt" style="color:var(--gold-dim)"></i>${p.location}</div><div class="popup-tags">${p.tags.map(t=>`<span class="tag-pill">${t}</span>`).join('')}</div><button class="popup-btn" onclick="expandFromMap(decodeURIComponent('${encodeURIComponent(p.name)}'))">Lihat Detail</button></div>`;
    }

    const markers={};
    personnelData.forEach(p=>{
      const m=L.marker([p.lat,p.lng],{icon:createPinIcon(p),title:p.name});
      m.bindPopup(buildPopupHTML(p),{maxWidth:240,minWidth:200});
      m._pinActive=false;
      m.addTo(map);
      m.on('click',()=>expandFromMap(p.name));
      markers[p.name]=m;
    });

    /* ============================================================
       PAGINATION STATE
    ============================================================ */
    const ITEMS_PER_PAGE=8;
    let currentPage=1;
    let filteredData=[...personnelData];

    /* ============================================================
       ACC OPEN/CLOSE
    ============================================================ */
    function openAcc(item){item.classList.add('is-active');item.querySelector('.accordion-header').setAttribute('aria-expanded','true');}
    function closeAcc(item){item.classList.remove('is-active');item.querySelector('.accordion-header').setAttribute('aria-expanded','false');}
    function closeAllAcc(){document.querySelectorAll('.accordion-item.is-active').forEach(closeAcc);}

    /* ============================================================
       MARKER STYLES
    ============================================================ */
    function updateMarkerStyles(pageNames){
      const filteredNames=new Set(filteredData.map(p=>p.name));
      personnelData.forEach(p=>{
        const m=markers[p.name];if(!m)return;
        if(!filteredNames.has(p.name)){m.setIcon(createPinIcon(p,'pin-dimmed'));return;}
        if(m._pinActive){m.setIcon(createPinIcon(p,'pin-active'));return;}
        if(pageNames&&pageNames.has(p.name)){m.setIcon(createPinIcon(p,'pin-current-page'));return;}
        m.setIcon(createPinIcon(p,''));
      });
    }

    /* ============================================================
       RENDER PAGE
    ============================================================ */
    function renderPage(page,skipFly){
      currentPage=page;
      const pageData=filteredData.slice((page-1)*ITEMS_PER_PAGE,page*ITEMS_PER_PAGE);
      const pageNames=new Set(pageData.map(p=>p.name));
      accordionList.classList.add('fading');
      setTimeout(()=>{
        document.querySelectorAll('.accordion-item').forEach(item=>{
          const n=item.getAttribute('data-name');
          item.style.display=pageNames.has(n)?'':'none';
          closeAcc(item);
        });
        updateMarkerStyles(pageNames);
        updatePaginationUI();
        accordionList.classList.remove('fading');
        if(!skipFly&&pageData.length>0){
          const bounds=pageData.map(p=>[p.lat,p.lng]);
          if(bounds.length===1)map.flyTo(bounds[0],12,{animate:true,duration:0.8});
          else map.flyToBounds(bounds,{padding:[50,50],maxZoom:9,animate:true,duration:0.8});
        }
        accordionList.scrollTop=0;
      },180);
    }

    /* ============================================================
       PAGINATION UI
    ============================================================ */
    function updatePaginationUI(){
      const tp=Math.max(1,Math.ceil(filteredData.length/ITEMS_PER_PAGE));
      const s=filteredData.length>0?(currentPage-1)*ITEMS_PER_PAGE+1:0;
      const e=Math.min(currentPage*ITEMS_PER_PAGE,filteredData.length);
      document.getElementById('pagination-info').textContent=filteredData.length>0
        ?`Menampilkan ${s}\u2013${e} dari ${filteredData.length} personel`
        :'Tidak ada personel ditemukan';
      document.getElementById('btn-prev').disabled=currentPage<=1;
      document.getElementById('btn-next').disabled=currentPage>=tp||filteredData.length===0;
      const ctrl=document.getElementById('pagination-controls');
      ctrl.querySelectorAll('.page-num').forEach(b=>b.remove());
      const nb=document.getElementById('btn-next');
      let sp=Math.max(1,currentPage-2),ep=Math.min(tp,sp+4);
      if(ep-sp<4)sp=Math.max(1,ep-4);
      for(let i=sp;i<=ep;i++){
        const btn=document.createElement('button');
        btn.className='page-btn page-num'+(i===currentPage?' active':'');
        btn.textContent=i;
        btn.addEventListener('click',()=>renderPage(i));
        nb.before(btn);
      }
      document.getElementById('total-count-num').textContent=filteredData.length;
      document.getElementById('map-shown-count').textContent=filteredData.length;
      filteredData.length===0?emptyState.classList.add('show'):emptyState.classList.remove('show');
    }

    /* ============================================================
       EXPAND FROM MAP
    ============================================================ */
    window.expandFromMap=function(name){
      const idx=filteredData.findIndex(p=>p.name===name);
      if(idx<0)return;
      const page=Math.floor(idx/ITEMS_PER_PAGE)+1;
      Object.values(markers).forEach(m=>m._pinActive=false);
      if(markers[name])markers[name]._pinActive=true;
      const person=personnelData.find(p=>p.name===name);
      if(person)map.flyTo([person.lat,person.lng],13,{animate:true,duration:0.8});
      if(page!==currentPage){
        currentPage=page;
        const pd=filteredData.slice((page-1)*ITEMS_PER_PAGE,page*ITEMS_PER_PAGE);
        const pn=new Set(pd.map(p=>p.name));
        accordionList.classList.add('fading');
        setTimeout(()=>{
          document.querySelectorAll('.accordion-item').forEach(item=>{
            const n=item.getAttribute('data-name');
            item.style.display=pn.has(n)?'':'none';
            closeAcc(item);
          });
          updateMarkerStyles(pn);updatePaginationUI();
          accordionList.classList.remove('fading');
          setTimeout(()=>openAndScrollTo(name),60);
        },180);
      }else{
        const pd=filteredData.slice((currentPage-1)*ITEMS_PER_PAGE,currentPage*ITEMS_PER_PAGE);
        updateMarkerStyles(new Set(pd.map(p=>p.name)));
        openAndScrollTo(name);
      }
    };

    function openAndScrollTo(name){
      const item=document.getElementById(safeId(name));
      if(!item)return;
      closeAllAcc();openAcc(item);
      setTimeout(()=>item.scrollIntoView({behavior:'smooth',block:'nearest'}),80);
    }

    /* ============================================================
       ACCORDION EVENTS
    ============================================================ */
    accordionList.addEventListener('click',function(e){
      const mb=e.target.closest('.accordion-map-btn');
      if(mb){
        e.stopPropagation();
        const name=mb.getAttribute('data-name');
        const person=personnelData.find(p=>p.name===name);
        if(!person)return;
        Object.values(markers).forEach(m=>m._pinActive=false);
        markers[name]._pinActive=true;
        const pd=filteredData.slice((currentPage-1)*ITEMS_PER_PAGE,currentPage*ITEMS_PER_PAGE);
        updateMarkerStyles(new Set(pd.map(p=>p.name)));
        map.flyTo([person.lat,person.lng],13,{animate:true,duration:0.8});
        setTimeout(()=>markers[name].openPopup(),900);
        return;
      }
      const header=e.target.closest('.accordion-header');
      if(header){
        const item=header.closest('.accordion-item');if(!item)return;
        const wasActive=item.classList.contains('is-active');
        closeAllAcc();
        if(!wasActive){
          openAcc(item);
          const name=item.getAttribute('data-name');
          const person=personnelData.find(p=>p.name===name);
          if(person)map.flyTo([person.lat,person.lng],13,{animate:true,duration:0.8});
        }
      }
    });

    accordionList.addEventListener('keydown',function(e){
      if(e.key==='Enter'||e.key===' '){const h=e.target.closest('.accordion-header');if(h){e.preventDefault();h.click();}}
    });

    /* ============================================================
       PAGINATION BUTTONS
    ============================================================ */
    document.getElementById('btn-prev').addEventListener('click',()=>{if(currentPage>1)renderPage(currentPage-1);});
    document.getElementById('btn-next').addEventListener('click',()=>{const tp=Math.ceil(filteredData.length/ITEMS_PER_PAGE);if(currentPage<tp)renderPage(currentPage+1);});

    /* ============================================================
       FILTERS
    ============================================================ */
    function applyFilters(){
      const search=document.getElementById('search-input').value.trim().toLowerCase();
      const cat=document.getElementById('filter-category').value;
      const gen=document.getElementById('filter-gender').value;
      const prov=document.getElementById('filter-province').value;
      const city=document.getElementById('filter-city').value;
      filteredData=personnelData.filter(p=>{
        if(search&&!(p.name+' '+p.location+' '+p.tags.join(' ')).toLowerCase().includes(search))return false;
        if(cat&&!p.tags.includes(cat))return false;
        if(gen&&p.gender!==gen)return false;
        if(prov&&p.province!==prov)return false;
        if(city&&p.city!==city)return false;
        return true;
      });
      renderPage(1);
    }

    let deb;
    document.getElementById('search-input').addEventListener('input',()=>{clearTimeout(deb);deb=setTimeout(applyFilters,280);});
    ['filter-category','filter-gender','filter-province','filter-city'].forEach(id=>{document.getElementById(id).addEventListener('change',applyFilters);});
    document.getElementById('btn-reset-filter').addEventListener('click',()=>{
      document.getElementById('search-input').value='';
      ['filter-category','filter-gender','filter-province','filter-city'].forEach(id=>document.getElementById(id).value='');
      applyFilters();
    });

    /* ============================================================
       INITIAL RENDER
    ============================================================ */
    renderPage(1,true);
    try{map.fitBounds(personnelData.map(p=>[p.lat,p.lng]),{padding:[40,40]});}catch(err){}
  }
});
