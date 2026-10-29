@verbatim
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Casa Arco Iris · Hostal en Los Caños de Meca (Cádiz)</title>
<meta name="description" content="Hostal Casa Arco Iris: alojamiento familiar en Los Caños de Meca, a 50 m de la playa, con piscina, jardín y terrazas. 11 habitaciones con baño privado. 4,7★ en Google.">
<link rel="icon" href="/favicon.ico" sizes="any">
<meta property="og:title" content="Casa Arco Iris · Hostal en Los Caños de Meca">
<meta property="og:description" content="Hostal familiar entre el Parque Natural de La Breña y el mar. Piscina, jardín, terrazas y las mejores puestas de sol de la Costa de la Luz.">
<meta property="og:type" content="website">
<meta property="og:image" content="/img/hero/hero.jpg">
<meta name="theme-color" content="#0a5a63">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=Figtree:wght@400;500;600;700&display=swap">
<style>
:root{
  --bg:#ffffff; --panel:#eef6f5; --panel2:#f6f1e9;
  --ink:#143139; --muted:#5d757e; --line:#e5ecec;
  --sea:#0e9195; --sea-deep:#0a5a63; --sun:#ef6f53; --gold:#edb24a;
  --white:#ffffff; --shadow:0 18px 50px -24px rgba(12,54,61,.45);
  --maxw:1120px; color-scheme:light;
}
*{box-sizing:border-box}
body{margin:0;background:var(--bg);color:var(--ink);font-family:"Figtree",system-ui,-apple-system,Segoe UI,Roboto,sans-serif;line-height:1.6;-webkit-font-smoothing:antialiased}
h1,h2,h3{font-family:"Fraunces","Georgia",serif;font-weight:600;line-height:1.08;text-wrap:balance;margin:0}
p{margin:0}
a{color:inherit}
img{display:block;max-width:100%}
.wrap{max-width:var(--maxw);margin:0 auto;padding-left:max(20px,env(safe-area-inset-left,0px));padding-right:max(20px,env(safe-area-inset-right,0px))}
.eyebrow{font-size:.78rem;letter-spacing:.18em;text-transform:uppercase;font-weight:600;color:var(--sea)}
.btn{display:inline-flex;align-items:center;gap:.5em;border:0;cursor:pointer;font-family:inherit;font-weight:600;font-size:1rem;padding:.8em 1.4em;border-radius:999px;background:var(--sun);color:#fff;text-decoration:none;transition:transform .18s ease,box-shadow .18s ease,background .18s}
.btn:hover{transform:translateY(-2px);box-shadow:0 12px 26px -12px rgba(239,111,83,.7)}
.btn.ghost{background:transparent;color:var(--ink);border:1.5px solid var(--line)}
.btn.ghost:hover{border-color:var(--sea);color:var(--sea-deep);box-shadow:none}
.rainbow{height:4px;border-radius:9px;background:linear-gradient(90deg,#ef6f53,#edb24a,#4fb477,#0e9195,#5a7fd6,#8a6fd0)}

.demo-strip{background:linear-gradient(90deg,var(--sea-deep),var(--sea));color:#eafaf9;font-size:.82rem;text-align:center;padding:7px 16px;font-weight:500}
.demo-strip b{color:#fff}

header.site{position:sticky;top:0;z-index:40;background:rgba(255,255,255,.82);backdrop-filter:blur(12px);border-bottom:1px solid var(--line)}
.nav{display:flex;align-items:center;gap:18px;height:68px}
.brand{display:flex;align-items:center;gap:11px;font-family:"Fraunces",serif;font-weight:600;font-size:1.25rem;text-decoration:none;color:var(--ink)}
.brand .mark{width:34px;height:34px;border-radius:50%;background:conic-gradient(from 200deg,#ef6f53,#edb24a,#4fb477,#0e9195,#5a7fd6,#ef6f53);flex:0 0 auto;box-shadow:inset 0 0 0 3px #fff}
.nav .links{display:flex;gap:22px;margin-left:auto;font-weight:500;font-size:.95rem}
.nav .links a{text-decoration:none;color:var(--ink);opacity:.82;transition:opacity .15s,color .15s}
.nav .links a:hover{opacity:1;color:var(--sea-deep)}
.nav .cta{margin-left:6px}
@media(max-width:900px){.nav .links{display:none}.nav .cta{margin-left:auto}}

.hero{position:relative;min-height:84vh;display:flex;align-items:flex-end;overflow:clip;isolation:isolate}
.hero .bg{position:absolute;inset:-8% 0;z-index:-2;will-change:transform}
.hero .bg img{width:100%;height:100%;object-fit:cover}
.hero::after{content:"";position:absolute;inset:0;z-index:-1;background:linear-gradient(180deg,rgba(10,44,51,.15) 0%,rgba(10,44,51,0) 30%,rgba(8,40,47,.62) 100%)}
.hero .wrap{width:100%;padding-top:70px;padding-bottom:40px}
.hero h1{color:#fff;font-size:clamp(2.5rem,6.4vw,5rem);font-weight:600;letter-spacing:-.01em;text-shadow:0 2px 30px rgba(8,30,35,.35)}
.hero .sub{color:#eef6f5;max-width:36ch;margin-top:16px;font-size:clamp(1.05rem,2vw,1.3rem);text-shadow:0 1px 12px rgba(8,30,35,.4)}
.hero .loc{display:inline-flex;align-items:center;gap:8px;color:#fff;font-weight:600;letter-spacing:.02em;margin-bottom:14px;font-size:.95rem}
.hero .loc .dot{width:8px;height:8px;border-radius:50%;background:var(--gold);box-shadow:0 0 0 4px rgba(237,178,74,.3)}

.book{margin-top:28px;background:rgba(255,255,255,.95);border-radius:18px;box-shadow:var(--shadow);padding:14px;display:grid;grid-template-columns:1.2fr 1fr auto;gap:12px;max-width:640px}
.book .f{display:flex;flex-direction:column;gap:3px;padding:6px 12px;border-radius:12px;background:var(--panel)}
.book .f label{font-size:.68rem;letter-spacing:.12em;text-transform:uppercase;color:var(--muted);font-weight:600}
.book .f input,.book .f select{border:0;background:transparent;font-family:inherit;font-size:.98rem;color:var(--ink);padding:2px 0;outline:none}
.book .btn{justify-content:center;width:100%;height:100%}
@media(max-width:620px){.book{grid-template-columns:1fr 1fr;max-width:none}.book .btn{grid-column:1/-1}}

.stats{background:var(--sea-deep);color:#eafaf9}
.stats .wrap{display:grid;grid-template-columns:repeat(4,1fr);gap:18px;padding-block:30px;text-align:center}
.stats .n{font-family:"Fraunces",serif;font-size:clamp(1.7rem,4vw,2.5rem);font-weight:600;color:#fff;line-height:1}
.stats .l{font-size:.86rem;opacity:.85;margin-top:6px}
.stats .star{color:var(--gold)}
@media(max-width:620px){.stats .wrap{grid-template-columns:repeat(2,1fr);gap:22px}}

section{padding-block:clamp(56px,8vw,92px)}
.section-head{max-width:62ch}
.section-head h2{font-size:clamp(1.9rem,4.4vw,3rem);margin-top:12px}
.section-head p.lead{color:var(--muted);font-size:1.12rem;margin-top:14px}

.hostal{background:var(--bg)}
.hostal .grid{display:grid;grid-template-columns:1.05fr .95fr;gap:clamp(28px,5vw,64px);align-items:center;margin-top:10px}
.hostal .photo{border-radius:20px;overflow:hidden;box-shadow:var(--shadow);aspect-ratio:4/3}
.hostal .photo img{width:100%;height:100%;object-fit:cover}
.hostal .copy p{color:var(--muted);margin-top:16px;font-size:1.06rem}
.services{display:grid;grid-template-columns:repeat(2,1fr);gap:14px;margin-top:26px}
.svc{display:flex;gap:12px;align-items:flex-start;background:var(--panel);border-radius:14px;padding:14px 16px}
.svc svg{flex:0 0 auto;width:24px;height:24px;color:var(--sea);margin-top:2px}
.svc b{display:block;font-weight:600}
.svc span{color:var(--muted);font-size:.9rem}
@media(max-width:860px){.hostal .grid{grid-template-columns:1fr}.hostal .photo{order:-1}}

.rooms{background:var(--panel)}
.room-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px;margin-top:38px}
.room{background:#fff;border-radius:18px;overflow:hidden;box-shadow:0 14px 40px -26px rgba(12,54,61,.5);transition:transform .22s ease,box-shadow .22s ease}
.room:hover{transform:translateY(-6px);box-shadow:0 26px 50px -28px rgba(12,54,61,.55)}
.room .img{aspect-ratio:3/2;overflow:hidden;cursor:zoom-in}
.room .img img{width:100%;height:100%;object-fit:cover;transition:transform .5s ease}
.room:hover .img img{transform:scale(1.06)}
.room .b{padding:18px 20px}
.room h3{font-size:1.3rem}
.room .feat{display:flex;flex-wrap:wrap;gap:8px;margin-top:12px}
.room .feat span{font-size:.8rem;background:var(--panel);color:var(--sea-deep);padding:4px 10px;border-radius:999px;font-weight:500}
@media(max-width:860px){.room-grid{grid-template-columns:1fr 1fr}}
@media(max-width:560px){.room-grid{grid-template-columns:1fr}}

/* galerías */
.gallery-wrap{margin-top:36px}
.gallery{display:grid;grid-template-columns:repeat(4,1fr);gap:12px}
.gallery figure{margin:0;overflow:hidden;border-radius:14px;cursor:zoom-in;background:var(--panel);box-shadow:0 10px 30px -24px rgba(12,54,61,.6)}
.gallery img{width:100%;height:100%;aspect-ratio:4/3;object-fit:cover;display:block;transition:transform .45s ease,filter .3s}
.gallery figure:hover img{transform:scale(1.07);filter:saturate(1.05)}
@media(max-width:860px){.gallery{grid-template-columns:repeat(3,1fr)}}
@media(max-width:560px){.gallery{grid-template-columns:repeat(2,1fr);gap:9px}}

.instal{background:var(--bg)}
.galeria-entorno{background:var(--panel2)}
.acti-section{background:var(--bg)}

.entorno{position:relative;color:#fff;overflow:clip}
.entorno .bg{position:absolute;inset:-6% 0;z-index:-2;will-change:transform}
.entorno .bg img{width:100%;height:100%;object-fit:cover}
.entorno::after{content:"";position:absolute;inset:0;z-index:-1;background:linear-gradient(120deg,rgba(10,50,57,.82),rgba(10,50,57,.45))}
.entorno h2{color:#fff}
.entorno .lead{color:#e7f2f1 !important}
.feat-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;margin-top:34px}
.fcard{background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.22);border-radius:16px;padding:20px;backdrop-filter:blur(6px)}
.fcard h3{color:#fff;font-size:1.22rem}
.fcard p{color:#e7f2f1;font-size:.95rem;margin-top:8px}
.acts{display:flex;flex-wrap:wrap;gap:10px;margin-top:28px}
.acts span{background:rgba(255,255,255,.14);border:1px solid rgba(255,255,255,.25);border-radius:999px;padding:7px 14px;font-size:.88rem;font-weight:500}
@media(max-width:820px){.feat-cards{grid-template-columns:1fr}}

.rev{background:var(--bg);text-align:center}
.rev .big{font-family:"Fraunces",serif;font-size:clamp(3rem,9vw,5rem);font-weight:600;color:var(--sea-deep);line-height:1}
.rev .stars{color:var(--gold);font-size:1.5rem;letter-spacing:4px;margin-top:6px}
.rev .meta{color:var(--muted);margin-top:8px}
.rev .quotes{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:40px;text-align:left}
.quote{background:var(--panel);border-radius:16px;padding:22px}
.quote p{font-size:1.02rem}
.quote .who{margin-top:14px;font-weight:600;color:var(--sea-deep);font-size:.9rem}
@media(max-width:820px){.rev .quotes{grid-template-columns:1fr}}

.contact{background:var(--panel2)}
.contact .grid{display:grid;grid-template-columns:1fr 1fr;gap:clamp(28px,5vw,56px);margin-top:10px}
.contact .info p{margin-top:14px;color:var(--muted)}
.contact .row{display:flex;align-items:center;gap:12px;margin-top:16px;font-size:1.05rem;color:var(--ink)}
.contact .row svg{width:22px;height:22px;color:var(--sun);flex:0 0 auto}
.contact .row b{font-weight:600}
.contact .map{margin-top:22px;border-radius:16px;overflow:hidden;box-shadow:var(--shadow);border:1px solid var(--line)}
.contact .map iframe{display:block;width:100%;height:220px;border:0}
form.cf{display:grid;gap:12px;background:#fff;border-radius:18px;padding:22px;box-shadow:var(--shadow);align-content:start}
form.cf input,form.cf textarea{font-family:inherit;font-size:1rem;padding:12px 14px;border:1.5px solid var(--line);border-radius:12px;background:var(--bg);color:var(--ink);outline:none;transition:border-color .15s}
form.cf input:focus,form.cf textarea:focus{border-color:var(--sea)}
form.cf .ok{display:none;background:#e6f5ee;color:#176a45;border-radius:12px;padding:12px 14px;font-weight:500}
@media(max-width:820px){.contact .grid{grid-template-columns:1fr}}

footer.site{background:var(--sea-deep);color:#cfe7e6;padding-block:40px;font-size:.92rem}
footer.site .grid{display:flex;flex-wrap:wrap;justify-content:space-between;gap:20px;align-items:center}
footer.site a{color:#fff;font-weight:600;text-decoration:none}
footer.site a:hover{text-decoration:underline}
footer.site .reg{opacity:.7;font-size:.82rem;margin-top:8px}

.chat-fab{position:fixed;right:max(18px,env(safe-area-inset-right,0px));bottom:max(18px,env(safe-area-inset-bottom,0px));z-index:60;display:flex;align-items:center;gap:10px;background:var(--sun);color:#fff;border:0;cursor:pointer;font-family:inherit;font-weight:600;font-size:.98rem;padding:13px 18px;border-radius:999px;box-shadow:0 16px 40px -16px rgba(239,111,83,.8)}
.chat-fab:hover{transform:translateY(-2px)}
.chat-fab svg{width:20px;height:20px}
.chat-panel{position:fixed;right:max(16px,env(safe-area-inset-right,0px));bottom:calc(74px + env(safe-area-inset-bottom,0px));z-index:61;width:min(380px,calc(100vw - 32px));height:min(560px,calc(100vh - 120px));background:#fff;border-radius:20px;box-shadow:0 30px 70px -20px rgba(8,30,35,.55);display:flex;flex-direction:column;overflow:hidden;border:1px solid var(--line)}
.chat-panel[hidden]{display:none}
.chat-head{background:var(--sea-deep);color:#fff;padding:15px 18px;display:flex;align-items:center;gap:11px}
.chat-head .mark{width:34px;height:34px;border-radius:50%;background:conic-gradient(from 200deg,#ef6f53,#edb24a,#4fb477,#0e9195,#5a7fd6,#ef6f53);box-shadow:inset 0 0 0 3px var(--sea-deep)}
.chat-head b{display:block;font-size:1rem}
.chat-head span{font-size:.78rem;opacity:.8}
.chat-head .x{margin-left:auto;background:transparent;border:0;color:#fff;font-size:1.3rem;cursor:pointer;opacity:.8}
.chat-body{flex:1;overflow-y:auto;padding:16px;display:flex;flex-direction:column;gap:12px;background:var(--panel)}
.msg{max-width:86%;padding:10px 14px;border-radius:16px;font-size:.95rem;line-height:1.5;white-space:pre-wrap;word-wrap:break-word}
.msg.bot{background:#fff;color:var(--ink);border-bottom-left-radius:5px;box-shadow:0 4px 14px -8px rgba(12,54,61,.4);align-self:flex-start}
.msg.me{background:var(--sea);color:#fff;border-bottom-right-radius:5px;align-self:flex-end}
.chips{display:flex;flex-wrap:wrap;gap:7px;padding:0 16px 10px;background:var(--panel)}
.chips button{background:#fff;border:1px solid var(--line);color:var(--sea-deep);font-family:inherit;font-size:.82rem;padding:6px 11px;border-radius:999px;cursor:pointer;font-weight:500}
.chips button:hover{border-color:var(--sea)}
.chat-input{display:flex;gap:8px;padding:12px;border-top:1px solid var(--line);background:#fff}
.chat-input input{flex:1;border:1.5px solid var(--line);border-radius:999px;padding:10px 15px;font-family:inherit;font-size:.95rem;outline:none}
.chat-input input:focus{border-color:var(--sea)}
.chat-input button{background:var(--sun);border:0;color:#fff;width:42px;height:42px;border-radius:50%;cursor:pointer;flex:0 0 auto;display:grid;place-items:center}
.chat-input button svg{width:18px;height:18px}
.hp{position:absolute;left:-9999px;opacity:0;height:0;width:0}
.typing{display:inline-flex;gap:4px;align-items:center}
.typing i{width:7px;height:7px;border-radius:50%;background:var(--muted);opacity:.5;animation:bl 1s infinite}
.typing i:nth-child(2){animation-delay:.2s}.typing i:nth-child(3){animation-delay:.4s}
@keyframes bl{0%,60%,100%{opacity:.3;transform:translateY(0)}30%{opacity:1;transform:translateY(-3px)}}

.lightbox{position:fixed;inset:0;z-index:120;background:rgba(7,28,33,.93);backdrop-filter:blur(4px);display:none;align-items:center;justify-content:center;padding:20px}
.lightbox.open{display:flex}
.lightbox img{max-width:min(1100px,94vw);max-height:84vh;border-radius:12px;box-shadow:0 40px 90px -30px rgba(0,0,0,.85)}
.lightbox button{position:absolute;background:rgba(255,255,255,.14);border:1px solid rgba(255,255,255,.3);color:#fff;cursor:pointer;width:46px;height:46px;border-radius:50%;font-size:1.4rem;display:grid;place-items:center;backdrop-filter:blur(6px);transition:background .15s}
.lightbox button:hover{background:rgba(255,255,255,.28)}
.lightbox .lb-close{top:18px;right:18px}
.lightbox .lb-prev{left:16px;top:50%;transform:translateY(-50%)}
.lightbox .lb-next{right:16px;top:50%;transform:translateY(-50%)}
.lightbox .lb-cap{position:absolute;bottom:16px;left:0;right:0;text-align:center;color:#eafaf9;font-size:.82rem;opacity:.85}
@media(max-width:560px){.lightbox .lb-prev,.lightbox .lb-next{width:40px;height:40px}}

@media (prefers-reduced-motion: reduce){*{animation:none!important;transition:none!important}.hero .bg,.entorno .bg{transform:none!important}}
</style>
</head>
<body>

<div class="demo-strip">Vista previa · Así podría ser la nueva web de <b>Casa Arco Iris</b> — propuesta de Sitesking</div>

<header class="site">
  <div class="wrap nav">
    <a class="brand" href="#top"><span class="mark"></span>Casa Arco Iris</a>
    <nav class="links">
      <a href="#hostal">El hostal</a>
      <a href="#habitaciones">Habitaciones</a>
      <a href="#instalaciones">Instalaciones</a>
      <a href="#entorno">Entorno</a>
      <a href="#contacto">Contacto</a>
    </nav>
    <a href="#contacto" class="btn cta">Reservar</a>
  </div>
</header>

<main id="top">
  <section class="hero" id="hero">
    <div class="bg" id="heroBg"><img src="/img/hero/hero.jpg" alt="Casa Arco Iris al atardecer: piscina, palmeras y vistas al faro de Trafalgar" fetchpriority="high"></div>
    <div class="wrap">
      <span class="loc"><span class="dot"></span>Los Caños de Meca · Cádiz · a 50 m de la playa</span>
      <h1>Donde el campo,<br>el parque y el mar<br>se dan la mano.</h1>
      <p class="sub">Un hostal familiar y acogedor en primera línea de naturaleza, con piscina, terrazas y las mejores puestas de sol de la Costa de la Luz.</p>
      <form class="book" id="book">
        <div class="f"><label>Entrada – Salida</label><input type="text" placeholder="Añade tus fechas" id="bk-date"></div>
        <div class="f"><label>Huéspedes</label><select><option>2 adultos</option><option>1 adulto</option><option>2 adultos + 1 niño</option><option>Familia (4)</option></select></div>
        <button class="btn" type="submit">Ver disponibilidad</button>
      </form>
    </div>
  </section>

  <section class="stats" style="padding:0">
    <div class="wrap">
      <div><div class="n">11</div><div class="l">habitaciones con baño</div></div>
      <div><div class="n">50 m</div><div class="l">hasta la playa</div></div>
      <div><div class="n"><span class="star">&#9733;</span> 4,7</div><div class="l">193 opiniones en Google</div></div>
      <div><div class="n">300</div><div class="l">días de sol al año</div></div>
    </div>
  </section>

  <section class="hostal" id="hostal">
    <div class="wrap">
      <div class="grid">
        <div class="copy">
          <span class="eyebrow">El hostal</span>
          <h2>Un sitio donde se respira paz y tranquilidad</h2>
          <p>Casa Arco Iris está en pleno centro de Los Caños de Meca, entre el Parque Natural de La Breña y el mar. Un alojamiento familiar pensado para desconectar: jardín, piscina al aire libre, porches y terrazas donde ver caer el sol sobre el Atlántico y, los días claros, la costa de África al fondo.</p>
          <p>Habitaciones modernas y confortables, trato cercano y la playa a un paseo de 50 metros.</p>
          <div class="services">
            <div class="svc"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9.5 12 4l9 5.5"/><path d="M5 10v10h14V10"/></svg><div><b>Parking propio</b><span>Aparcamiento sin preocupaciones</span></div></div>
            <div class="svc"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 15c2 0 2 1.5 4 1.5S8 15 10 15s2 1.5 4 1.5S16 15 18 15s2 1.5 4 1.5"/><path d="M6 11V5h6v6"/></svg><div><b>Piscina al aire libre</b><span>Jardín y zona de relax</span></div></div>
            <div class="svc"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 20V10l8-6 8 6v10"/><path d="M9 20v-6h6v6"/></svg><div><b>Camas balinesas</b><span>Porches para descansar</span></div></div>
            <div class="svc"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12.5a9 9 0 0 1 14 0"/><path d="M8.5 16a4.5 4.5 0 0 1 7 0"/><circle cx="12" cy="19" r="1"/></svg><div><b>Zonas WiFi</b><span>Conexión en zonas comunes</span></div></div>
            <div class="svc"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="7" width="18" height="12" rx="2"/><path d="M7 7V5h10v2"/></svg><div><b>Choza con office</b><span>Microondas, cafetera y nevera</span></div></div>
            <div class="svc"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="4"/><path d="M12 2v3M12 19v3M2 12h3M19 12h3M5 5l2 2M17 17l2 2M19 5l-2 2M7 17l-2 2"/></svg><div><b>Terrazas con vistas</b><span>Puestas de sol inolvidables</span></div></div>
          </div>
        </div>
        <div class="photo lb-item"><img src="/img/instalaciones/elhos3.jpg" alt="Piscina al aire libre de Casa Arco Iris con tumbonas"></div>
      </div>
    </div>
  </section>

  <section class="rooms" id="habitaciones">
    <div class="wrap">
      <div class="section-head"><span class="eyebrow">Habitaciones</span><h2>11 habitaciones para descansar de verdad</h2><p class="lead">Dobles o individuales, todas con baño privado, aire acondicionado y acceso 24 h. Modernas, alegres y luminosas, con cabeceros artesanos inspirados en el sol y el arcoíris.</p></div>
      <div class="room-grid">
        <div class="room"><div class="img lb-item"><img loading="lazy" src="/img/habitaciones/habita1.jpg" alt="Habitación doble con cabecero artesano"></div><div class="b"><h3>Doble con baño</h3><div class="feat"><span>Baño privado</span><span>Aire acondicionado</span><span>TV</span></div></div></div>
        <div class="room"><div class="img lb-item"><img loading="lazy" src="/img/habitaciones/habita5.jpg" alt="Habitación doble superior"></div><div class="b"><h3>Doble superior</h3><div class="feat"><span>Cabecero artesano</span><span>Acceso 24 h</span><span>Baño privado</span></div></div></div>
        <div class="room"><div class="img lb-item"><img loading="lazy" src="/img/habitaciones/habita8.jpg" alt="Habitación doble luminosa"></div><div class="b"><h3>Habitación doble</h3><div class="feat"><span>Luminosa</span><span>Aire acondicionado</span><span>Baño privado</span></div></div></div>
      </div>
      <div class="gallery-wrap">
        <div class="gallery" data-gallery="habitaciones">
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/habitaciones/habita1.jpg" alt="Habitación del Hostal Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/habitaciones/habita2.jpg" alt="Habitación del Hostal Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/habitaciones/habita3.jpg" alt="Habitación del Hostal Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/habitaciones/habita4.jpg" alt="Habitación del Hostal Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/habitaciones/habita5.jpg" alt="Habitación del Hostal Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/habitaciones/habita6.jpg" alt="Habitación del Hostal Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/habitaciones/habita7.jpg" alt="Habitación del Hostal Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/habitaciones/habita8.jpg" alt="Habitación del Hostal Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/habitaciones/habita9.jpg" alt="Habitación del Hostal Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/habitaciones/habita10.jpg" alt="Habitación del Hostal Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/habitaciones/habita11.jpg" alt="Habitación del Hostal Casa Arco Iris"></figure>
        </div>
      </div>
    </div>
  </section>

  <section class="instal" id="instalaciones">
    <div class="wrap">
      <div class="section-head"><span class="eyebrow">Instalaciones</span><h2>Piscina, jardín y la choza artesana</h2><p class="lead">Piscina al aire libre con tumbonas, jardín, porches con camas balinesas, terrazas con vistas y una choza común con office para el desayuno. Todo para que desconectes desde que llegas.</p></div>
      <div class="gallery-wrap">
        <div class="gallery" data-gallery="instalaciones">
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/carrusel/IMG_0334.jpg" alt="Instalaciones de Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/carrusel/IMG_8145.jpg" alt="Instalaciones de Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/carrusel/IMG_7988.jpg" alt="Instalaciones de Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/carrusel/IMG_8895.jpg" alt="Instalaciones de Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/carrusel/IMG_E8568.jpg" alt="Instalaciones de Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/instalaciones/elhos1.jpg" alt="Instalaciones de Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/instalaciones/elhos2.jpg" alt="Instalaciones de Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/instalaciones/elhos3.jpg" alt="Instalaciones de Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/instalaciones/elhos4.jpg" alt="Instalaciones de Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/instalaciones/elhos5.jpg" alt="Instalaciones de Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/instalaciones/elhos6.jpg" alt="Instalaciones de Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/instalaciones/elhos7.jpg" alt="Instalaciones de Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/instalaciones/elhos8.jpg" alt="Instalaciones de Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/instalaciones/elhos9.jpg" alt="Instalaciones de Casa Arco Iris"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/instalaciones/elhos10.jpg" alt="Instalaciones de Casa Arco Iris"></figure>
        </div>
      </div>
    </div>
  </section>

  <section class="entorno" id="entorno">
    <div class="bg" id="entBg"><img src="/img/entorno/entor1.jpg" alt="Los Caños de Meca: pinares del parque de La Breña y el mar" loading="lazy"></div>
    <div class="wrap">
      <span class="eyebrow" style="color:var(--gold)">Entorno</span>
      <h2>Los Caños de Meca, entre el pinar y el Atlántico</h2>
      <p class="lead">Playas extensas de arena fina y dorada, el Parque Natural de La Breña a tus pies y el faro de Trafalgar como testigo. Más de 300 días de sol al año y atardeceres que no se olvidan.</p>
      <div class="feat-cards">
        <div class="fcard"><h3>Parque de La Breña</h3><p>Senderos entre pinos que salen desde la puerta del hostal hasta acantilados y calas escondidas.</p></div>
        <div class="fcard"><h3>Cabo de Trafalgar</h3><p>Playas vírgenes y el histórico faro, frente al escenario de la batalla de 1805. Puestas de sol de postal.</p></div>
        <div class="fcard"><h3>Surf, kite y más</h3><p>Olas para todos los niveles de septiembre a primavera, escuelas de surf en El Palmar y deportes de viento.</p></div>
      </div>
      <div class="acts"><span>&#127940; Surf</span><span>&#129689; Kitesurf</span><span>&#128675; Kayak &amp; paddle</span><span>&#128014; Rutas a caballo</span><span>&#129496; Yoga en la playa</span><span>&#128044; Avistamiento de cetáceos</span><span>&#129406; Senderismo</span></div>
    </div>
  </section>

  <section class="galeria-entorno">
    <div class="wrap">
      <div class="section-head"><span class="eyebrow">El entorno en imágenes</span><h2>Playas, pinares y el faro de Trafalgar</h2><p class="lead">Un paseo visual por Los Caños de Meca y su costa: calas, atardeceres, La Breña y el Cabo de Trafalgar.</p></div>
      <div class="gallery-wrap">
        <div class="gallery" data-gallery="entorno">
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor1.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor2.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor3.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor4.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor5.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor6.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor7.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor8.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor9.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor10.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor11.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor12.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor13.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor14.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor15.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor16.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor17.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor18.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor19.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor20.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor21.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor22.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor23.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor24.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/entor25.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/entorno/playas-1.jpg" alt="Los Caños de Meca y su entorno natural"></figure>
        </div>
      </div>
    </div>
  </section>

  <section class="acti-section">
    <div class="wrap">
      <div class="section-head"><span class="eyebrow">Actividades</span><h2>Para quien no quiere parar quieto</h2><p class="lead">Surf, kitesurf, kayak y paddle, rutas a caballo, senderismo por el parque o, simplemente, una buena puesta de sol en la playa.</p></div>
      <div class="gallery-wrap">
        <div class="gallery" data-gallery="actividades">
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/actividades/surf1.jpg" alt="Actividades en Los Caños de Meca"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/actividades/surf3.jpg" alt="Actividades en Los Caños de Meca"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/actividades/acti1.jpg" alt="Actividades en Los Caños de Meca"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/actividades/acti2.jpg" alt="Actividades en Los Caños de Meca"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/actividades/acti4.jpg" alt="Actividades en Los Caños de Meca"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/actividades/acti5.jpg" alt="Actividades en Los Caños de Meca"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/actividades/acti6.jpg" alt="Actividades en Los Caños de Meca"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/actividades/acti7.jpg" alt="Actividades en Los Caños de Meca"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/actividades/acti8.jpg" alt="Actividades en Los Caños de Meca"></figure>
        <figure class="lb-item"><img loading="lazy" decoding="async" src="/img/actividades/acti9.jpg" alt="Actividades en Los Caños de Meca"></figure>
        </div>
      </div>
    </div>
  </section>

  <section class="rev">
    <div class="wrap">
      <span class="eyebrow">Opiniones</span>
      <div class="big">4,7</div>
      <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
      <div class="meta">Basado en 193 opiniones reales en Google</div>
      <div class="quotes">
        <div class="quote"><p>"Un rincón tranquilo a un paso de la playa. Las terrazas y la piscina son una maravilla al atardecer."</p><div class="who">Huésped · Google</div></div>
        <div class="quote"><p>"Trato familiar y cercano, habitaciones limpias y la ubicación inmejorable para disfrutar de los Caños."</p><div class="who">Huésped · Google</div></div>
        <div class="quote"><p>"Repetiremos seguro. Perfecto para desconectar entre el pinar y el mar."</p><div class="who">Huésped · Google</div></div>
      </div>
    </div>
  </section>

  <section class="contact" id="contacto">
    <div class="wrap">
      <div class="grid">
        <div class="info">
          <span class="eyebrow">Contacto y reservas</span>
          <h2 style="font-size:clamp(1.8rem,4vw,2.6rem);margin-top:12px">¿Hablamos de tu escapada?</h2>
          <p>Escríbenos o llámanos y te ayudamos con las fechas, las habitaciones y todo lo que necesites saber de la zona.</p>
          <div class="row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h5l2 5-3 2a12 12 0 0 0 5 5l2-3 5 2v5a2 2 0 0 1-2 2A18 18 0 0 1 2 6a2 2 0 0 1 2-2"/></svg><a href="tel:+34659904200"><b id="tel">+34 659 904 200</b></a></div>
          <div class="row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-5.5-7-11a7 7 0 0 1 14 0c0 5.5-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg><span>Avda. de Trafalgar, Calle Hibisco s/n · 11159 Los Caños de Meca (Barbate), Cádiz</span></div>
          <div class="map"><iframe loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps?q=Hostal%20Casa%20Arco%20Iris%20Los%20Ca%C3%B1os%20de%20Meca&output=embed" title="Mapa de Casa Arco Iris"></iframe></div>
        </div>
        <form class="cf" id="cf">
          <input type="text" placeholder="Tu nombre" required>
          <input type="email" placeholder="Tu email" required>
          <input type="text" placeholder="Fechas aproximadas / nº de personas">
          <textarea rows="3" placeholder="Cuéntanos qué necesitas"></textarea>
          <button class="btn" type="submit">Enviar solicitud</button>
          <div class="ok" id="cfok">¡Gracias! En la web real esta solicitud os llegaría al instante. &#127752;</div>
        </form>
      </div>
    </div>
  </section>
</main>

<footer class="site">
  <div class="wrap grid">
    <div>
      <div style="font-family:Fraunces,serif;font-size:1.25rem;color:#fff">Casa Arco Iris</div>
      <div class="reg">Hostal · Inscrito en el Registro de Turismo de Andalucía H/CA701432</div>
    </div>
    <div>Diseño y desarrollo web: <a href="https://hawkins.es" target="_blank" rel="noopener">Hawkins</a></div>
  </div>
</footer>

<button class="chat-fab" id="chatFab" aria-label="Abrir chat">
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.5 8.5 0 0 1-12.6 7.4L3 20l1.1-5.4A8.5 8.5 0 1 1 21 11.5z"/></svg>
  Pregúntanos
</button>

<div class="chat-panel" id="chatPanel" hidden>
  <div class="chat-head"><span class="mark"></span><div><b>Iris</b><span>Asistente virtual · IA</span></div><button class="x" id="chatX" aria-label="Cerrar">&times;</button></div>
  <div class="chat-body" id="chatBody"></div>
  <div class="chips" id="chips">
    <button>¿Dónde estáis?</button>
    <button>¿Tenéis piscina?</button>
    <button>¿Qué hacer en la zona?</button>
    <button>¿Cómo reservo?</button>
  </div>
  <form class="chat-input" id="chatForm">
    <input class="hp" type="text" id="chatHp" tabindex="-1" autocomplete="off" aria-hidden="true">
    <input id="chatText" placeholder="Escribe tu pregunta…" autocomplete="off">
    <button type="submit" aria-label="Enviar"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg></button>
  </form>
</div>

<div class="lightbox" id="lightbox" aria-hidden="true">
  <button class="lb-close" id="lbClose" aria-label="Cerrar">&times;</button>
  <button class="lb-prev" id="lbPrev" aria-label="Anterior">&#8249;</button>
  <img id="lbImg" src="" alt="">
  <button class="lb-next" id="lbNext" aria-label="Siguiente">&#8250;</button>
  <div class="lb-cap" id="lbCap"></div>
</div>

<script>
/* ---- parallax hero + entorno ---- */
(function(){
  var hero=document.getElementById('heroBg'), ent=document.getElementById('entBg');
  var reduce=matchMedia('(prefers-reduced-motion: reduce)').matches;
  if(reduce) return;
  var tick=false;
  function f(){
    tick=false;
    var y=window.scrollY||window.pageYOffset;
    if(hero) hero.style.transform='translate3d(0,'+(y*0.28)+'px,0) scale(1.06)';
    var e=document.getElementById('entorno');
    if(ent&&e){var r=e.getBoundingClientRect();ent.style.transform='translate3d(0,'+(r.top*-0.12)+'px,0) scale(1.08)';}
  }
  addEventListener('scroll',function(){if(!tick){tick=true;requestAnimationFrame(f);}},{passive:true});
  f();
})();

/* ---- demo: booking + form no envían de verdad ---- */
document.getElementById('book').addEventListener('submit',function(e){e.preventDefault();openChat();send('Quiero ver disponibilidad y reservar, ¿cómo lo hago?');});
document.getElementById('cf').addEventListener('submit',function(e){e.preventDefault();document.getElementById('cfok').style.display='block';e.target.querySelector('button').textContent='Enviado ✓';});

/* ---- lightbox de galerías ---- */
(function(){
  var lb=document.getElementById('lightbox'),img=document.getElementById('lbImg'),cap=document.getElementById('lbCap');
  var group=[],idx=0;
  function show(i){idx=(i+group.length)%group.length;var el=group[idx];img.src=el.getAttribute('src');img.alt=el.getAttribute('alt')||'';cap.textContent=(idx+1)+' / '+group.length;}
  function open(el){
    var fig=el.closest('[data-gallery]')||document;
    group=Array.prototype.slice.call(fig.querySelectorAll('.lb-item img, figure img'));
    if(group.length===0)group=[el];
    show(group.indexOf(el));
    lb.classList.add('open');lb.setAttribute('aria-hidden','false');
  }
  function close(){lb.classList.remove('open');lb.setAttribute('aria-hidden','true');img.src='';}
  document.addEventListener('click',function(e){
    var it=e.target.closest('.lb-item');
    if(it){var im=it.querySelector('img')||it;open(im);return;}
  });
  document.getElementById('lbClose').addEventListener('click',close);
  document.getElementById('lbPrev').addEventListener('click',function(){show(idx-1);});
  document.getElementById('lbNext').addEventListener('click',function(){show(idx+1);});
  lb.addEventListener('click',function(e){if(e.target===lb)close();});
  addEventListener('keydown',function(e){if(!lb.classList.contains('open'))return;if(e.key==='Escape')close();if(e.key==='ArrowLeft')show(idx-1);if(e.key==='ArrowRight')show(idx+1);});
})();

/* ---- CHAT con IA "Iris" (backend propio /iris/chat) ---- */
var panel=document.getElementById('chatPanel'),body=document.getElementById('chatBody'),fab=document.getElementById('chatFab');
var GREETING='¡Hola! Soy Iris, del Hostal Casa Arco Iris 🌈 ¿En qué puedo ayudarte?';
var convo=[{role:'assistant',content:GREETING}];
var started=false,busy=false;
function push(who,text){var d=document.createElement('div');d.className='msg '+(who==='me'?'me':'bot');d.textContent=text;body.appendChild(d);body.scrollTop=body.scrollHeight;return d;}
function openChat(){panel.hidden=false;if(!started){started=true;push('bot',GREETING);}document.getElementById('chatText').focus();}
fab.addEventListener('click',function(){panel.hidden?openChat():(panel.hidden=true);});
document.getElementById('chatX').addEventListener('click',function(){panel.hidden=true;});
document.getElementById('chips').addEventListener('click',function(e){if(e.target.tagName==='BUTTON'){send(e.target.textContent);}});
document.getElementById('chatForm').addEventListener('submit',function(e){e.preventDefault();var t=document.getElementById('chatText').value.trim();if(t)send(t);document.getElementById('chatText').value='';});

async function send(text){
  if(busy)return;
  if(panel.hidden)openChat();
  busy=true;
  push('me',text);
  convo.push({role:'user',content:text});
  var typing=push('bot','');typing.innerHTML='<span class="typing"><i></i><i></i><i></i></span>';
  try{
    var res=await fetch('/iris/chat',{
      method:'POST',
      headers:{'Content-Type':'application/json','Accept':'application/json'},
      body:JSON.stringify({messages:convo.slice(-12),website:document.getElementById('chatHp').value})
    });
    var data=await res.json();
    var reply=(data&&data.reply)||'Perdona, no te he entendido. ¿Puedes repetirlo?';
    typing.textContent=reply;
    convo.push({role:'assistant',content:reply});
  }catch(err){
    typing.textContent='Uy, algo ha fallado. Puedes llamarnos al +34 659 904 200 y te ayudamos 🌊';
    convo.pop();
  }
  busy=false;
  body.scrollTop=body.scrollHeight;
}
</script>

</body></html>
@endverbatim
