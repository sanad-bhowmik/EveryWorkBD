<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AllHouseWorks | Brands</title>
    <!-- Link to Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="{{ url('img/favicon.ico') }}" type="image/x-icon">
</head>
<style>
    .hover\:zoom-in {
        transition: transform 0.3s ease;
    }

    .hover\:zoom-in:hover {
        transform: scale(1.1);
    }

    @media (max-width: 768px) {
        .responsive-image {
            flex-basis: 100% !important;
            max-width: 100% !important;
        }
    }

    #nav1 {
        background-color: #fbde6e;
    }

    .submenu {
        display: none;
    }

    .hoverable:hover .submenu {
        display: block;
    }

    .relative:hover>.hhkl {
        display: block;
    }

    .hhkl {
        position: absolute;
        top: 56%;
        left: 0;
        background-color: white;
        padding: 8px 0;
        border-radius: 4px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Hide submenu by default */
    .hhkl {
        display: none;
    }

    .main-container__marquee {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        width: 100vw;
        max-width: 100%;
        min-height: 1rem;
        overflow-x: hidden;
        font-family: "Merriweather", serif;
        font-size: 18px;
        color: black;
    }

    #timebor {
        border: 1px solid #8590f8;
    }

    .main-container__marquee-track {
        display: flex;
        white-space: nowrap;
        position: relative;
        display: flex;
        overflow: hidden;
        user-select: none;
    }

    .main-container__marquee-items {
        flex-shrink: 0;
        display: flex;
        gap: 20px;
        justify-content: space-around;
        min-width: 100%;
        animation: marquee 12s linear infinite;

    }

    .main-container__marquee-item {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        width: auto;
        transition: all 0.1s ease-in-out;
    }

    @keyframes marquee {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-100%);
        }
    }

    .sticky-nav {
        position: fixed;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        z-index: 10;
        transition: all 0.5s ease-in-out;
    }


    .parallax {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1000%26quot%3b)' fill='none'%3e%3cpath d='M810.1347036630418 421.6504848910055L888.2684192138595 340.7406539090441 807.3585882318982 262.6069383582264 729.2248726810805 343.51676934018775z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M644.3072411395592 141.28127900947237L757.7756805729197 182.5804134918529 799.0748150553002 69.11197405849242 685.6063756219397 27.812839576111884z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M416.372%2c499.692C434.769%2c499.785%2c452.997%2c492.812%2c462.679%2c477.169C472.858%2c460.723%2c474.63%2c439.076%2c463.81%2c423.045C453.896%2c408.358%2c434.03%2c407.08%2c416.372%2c408.563C401.642%2c409.8%2c389.191%2c417.708%2c380.982%2c430.001C371.501%2c444.199%2c363.141%2c461.481%2c370.871%2c476.703C379.117%2c492.942%2c398.159%2c499.6%2c416.372%2c499.692' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M293.2988487532544 406.02504290171237L378.67749769551637 537.7713416937648 443.10590335357733 416.5991340525801z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M263.1277886119991 548.6007948076293L354.32636880281814 530.8735865972169 245.40058040158664 457.4022146168103z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M991.4238191431543-3.327366227237686L874.8946885315877-17.6353443617761 860.5867103970493 98.89378624979051 977.1158410086159 113.20176438432892z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1267.4646466613688 551.7852615289253L1326.5088723523097 646.2757746426306 1438.7225291773973 510.46417954936646z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1314.6190180147405 351.488657935923L1219.2549705158951 300.78269443937376 1190.878049020494 469.1817474359163z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M1331.1073826180477 373.31065597632755L1397.420211078349 262.9475761532185 1287.05713125524 196.63474769291713 1220.7443027949387 306.9978275160262z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M363.0307307763521 173.12558445680196L272.7681890990368 288.65636937716073 388.29897401939553 378.918911054476 478.56151569671084 263.3881261341172z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1187.844818718184 426.82393790112536L1136.5421189381648 508.9254197921167 1218.6436008291562 560.2281195721359 1269.9463006091753 478.12663768114453z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M932.233%2c175.671C952.825%2c176.139%2c972.302%2c166.494%2c983.425%2c149.159C995.548%2c130.266%2c1001.432%2c105.547%2c989.381%2c86.608C977.895%2c68.558%2c953.628%2c68.702%2c932.233%2c68.708C910.853%2c68.714%2c886.205%2c68.346%2c875.138%2c86.639C863.845%2c105.307%2c873.14%2c128.554%2c884.918%2c146.92C895.596%2c163.57%2c912.458%2c175.222%2c932.233%2c175.671' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M436.8912101982195 350.77272598110756L528.8928544474314 337.84273810433086 515.9628665706548 245.84109385511897 423.9612223214428 258.7710817318956z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1354.0098044337633-69.5110982927585L1292.9820051231359 45.265498992583105 1468.786401719105-8.483298982131096z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M605.799%2c316.795C644.145%2c319.53%2c683.479%2c305.636%2c704.198%2c273.254C726.467%2c238.451%2c729.1%2c192.953%2c707.623%2c157.655C686.864%2c123.538%2c645.642%2c108.808%2c605.799%2c111.534C570.386%2c113.957%2c541.788%2c138.547%2c525.551%2c170.112C510.726%2c198.933%2c513.483%2c232.328%2c529.038%2c260.761C545.334%2c290.548%2c571.932%2c314.379%2c605.799%2c316.795' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M553.069%2c250.317C583.338%2c251.188%2c610.375%2c232.423%2c625.402%2c206.132C640.311%2c180.047%2c640.833%2c148.384%2c626.388%2c122.04C611.352%2c94.618%2c584.307%2c72.724%2c553.069%2c74.218C523.631%2c75.626%2c504.39%2c102.279%2c490.966%2c128.516C478.969%2c151.965%2c475.642%2c178.7%2c487.607%2c202.166C500.795%2c228.031%2c524.048%2c249.482%2c553.069%2c250.317' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M363.8%2c686.915C418.255%2c689.311%2c472.198%2c661.037%2c496.988%2c612.492C520.082%2c567.267%2c500.323%2c515.374%2c473.38%2c472.331C448.462%2c432.524%2c410.751%2c400.769%2c363.8%2c399.722C315.12%2c398.636%2c269.408%2c424.876%2c245.414%2c467.246C221.749%2c509.034%2c226.691%2c559.328%2c249.474%2c601.603C273.652%2c646.466%2c312.886%2c684.675%2c363.8%2c686.915' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M195.4141197981914 28.732110290471002L152.12575875765845 130.71309806044331 297.39510756816367 72.02047133100393z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M590.3078504730368 302.48332001087346L613.2623869345789 401.9103408994191 689.7348713615823 279.5287835493313z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M37.111678448741515 383.81688902847173L-49.089559404007304 446.44575429519927 87.9543574224584 544.4331784409587z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1000'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        position: relative;
        overflow: hidden;
    }


    .overlay {
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .content {
        position: relative;
        z-index: 1;
        text-align: center;
        padding-top: 100px;
    }

    .mt-14 {
        margin-top: 14px;
    }

    .text-container {
        margin-top: 50px;
    }

    .card-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 50px;
    }

    .line {
        background-color: #810CA8;
        height: 2px;
        margin: 0 auto;
        width: 50px;
    }

    .shortcode_wa_button,
    .shortcode_wa_button_nt {
        background: #25d366 !important;
        border-radius: 5px !important;
        color: #ffffff !important;
        font-size: 16px !important;
        font-weight: bold !important;
        position: relative !important;
        display: inline-flex !important;
        width: auto !important;
        transition: all .3s !important;
        align-items: center !important;
        box-shadow: 0 2px 2px 0px rgba(45, 62, 79, .3) !important;
        text-transform: none !important;
        cursor: pointer;
        margin-top: 10px;
        margin-bottom: 10px;
        -webkit-box-shadow: 0 4px 7px 0 rgba(0, 0, 0, .25);
        -moz-box-shadow: 0 4px 7px 0 rgba(0, 0, 0, .25);
        box-shadow: 0 4px 7px 0 rgba(0, 0, 0, .25);
        transition: top .1s ease;
        -webkit-transition: top .1s ease;
        margin-left: 5%;
        margin-top: 4%;
        padding: 10px;
    }

    .yellow-triangle {
        clip-path: polygon(0 0, 100% 0, 38% 100%, 0% 100%);
        width: 13%;
    }

    .black-polygon {
        clip-path: polygon(0% 0, 100% 0, 100% 100%, 0% 100%);
    }


    .halfway-banner {
        top: 14%;
        width: 62%;
        transform: translateY(-50%);
        margin-left: 20%;
    }

    .ww-polygon {
        clip-path: polygon(0 0, 100% 0, 92% 150%, 0% 100%);
    }

    .purple-polygon {
        clip-path: polygon(11% 0, 100% 0, 100% 100%, 0% 100%);
    }

    #timeline {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1016%26quot%3b)' fill='none'%3e%3cuse xlink:href='%23SvgjsSymbol1023' x='0' y='0'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsSymbol1023' x='720' y='0'%3e%3c/use%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1016'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cpath d='M-1 0 a1 1 0 1 0 2 0 a1 1 0 1 0 -2 0z' id='SvgjsPath1018'%3e%3c/path%3e%3cpath d='M-3 0 a3 3 0 1 0 6 0 a3 3 0 1 0 -6 0z' id='SvgjsPath1017'%3e%3c/path%3e%3cpath d='M-5 0 a5 5 0 1 0 10 0 a5 5 0 1 0 -10 0z' id='SvgjsPath1019'%3e%3c/path%3e%3cpath d='M2 -2 L-2 2z' id='SvgjsPath1022'%3e%3c/path%3e%3cpath d='M6 -6 L-6 6z' id='SvgjsPath1021'%3e%3c/path%3e%3cpath d='M30 -30 L-30 30z' id='SvgjsPath1020'%3e%3c/path%3e%3c/defs%3e%3csymbol id='SvgjsSymbol1023'%3e%3cuse xlink:href='%23SvgjsPath1017' x='30' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='30' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='30' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='30' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='30' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='30' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='30' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='30' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='30' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='30' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='90' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='90' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='90' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='90' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='90' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='90' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='90' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='90' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='90' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='90' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='150' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='150' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='150' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='150' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='150' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='150' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='150' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='150' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='150' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='150' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='210' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='210' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='210' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='210' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='210' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='210' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='210' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='210' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='210' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='210' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='270' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='270' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='270' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='270' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='270' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='270' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='270' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='270' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='270' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='270' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='330' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='330' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='330' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='330' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='330' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='330' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='330' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='330' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='330' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='330' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='390' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='390' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='390' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='390' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='390' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='390' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='390' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='390' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='390' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='390' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='450' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='450' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='450' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='450' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='450' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='450' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='450' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='450' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='450' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='450' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='510' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='510' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='510' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='510' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='510' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='510' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='510' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='510' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='510' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='510' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='570' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='570' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='570' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='570' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='570' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='570' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='570' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='570' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='570' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='570' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='630' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='630' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='630' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='630' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='630' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='630' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='630' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='630' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='630' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='630' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='690' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='690' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='690' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='690' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='690' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='690' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='690' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='690' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='690' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='690' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3c/symbol%3e%3c/svg%3e");
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        position: relative;
        overflow: hidden;
    }

    #help {
        float: left;
        font-size: 44px;
        font-weight: 900;
        line-height: normal;
        margin-bottom: 67px;
        text-shadow: 3px 3px 0 rgba(0, 0, 0, .25);
        color: black;
    }

    .key_card {
        width: 216px;
        height: 246px;
        border-top: 1px solid rgba(0, 0, 0, 0.15);
        border-bottom: 1px solid rgba(0, 0, 0, 0.15);
        border-left: 1px solid rgba(0, 0, 0, 0.15);
        position: relative;
        background-image: url('data:image/svg+xml;charset=utf8,%3Csvg fill="%23ededed" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)rotate(180)" stroke="%23ededed"%3E%3Cg id="SVGRepo_bgCarrier" stroke-width="0"%3E%3C/g%3E%3Cg id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"%3E%3C/g%3E%3Cg id="SVGRepo_iconCarrier"%3E %3Ctitle%3Ekey%3C/title%3E %3Cpath d="M27.339 8.365l0.63-1.011 1.513 0.942 1.065-1.555-2.683-1.838c-1.513 2.208-3.368 1.191-5.172-0.028l1.654-2.413-2.101-1.44-11.242 16.406-1.431-0.999c-1.527-1.065-3.411 1.592-1.864 2.671l1.454 1.015-0.21 0.307c-2.85-1.433-5.949-1.161-7.289 0.796h0c-1.518 2.215-0.209 5.752 2.903 7.885s6.858 2.059 8.376-0.156c1.345-1.962 0.49-4.949-1.886-7.088l0.196-0.286 1.238 0.864c1.42 0.991 3.319-1.656 1.864-2.671l-1.261-0.88 6.545-9.552c1.731 1.195 3.456 2.533 2.091 4.525l2.683 1.838 1.802-2.63-1.678-1.045 0.689-1.106 1.727 1.075 1.121-1.635-2.353-1.465 0.689-1.106 0.933 0.581zM6.183 28.027c-1.135 0-2.055-0.92-2.055-2.055s0.92-2.055 2.055-2.055 2.055 0.92 2.055 2.055c-0 1.135-0.92 2.055-2.055 2.055z"%3E%3C/path%3E %3C/g%3E%3C/svg%3E');
        background-size: 56% auto;
        background-position: right bottom;
        background-repeat: no-repeat;
        padding: 40px;
    }

    #header_slider #slide_item:nth-child(1) {
        background: url("https://t4.ftcdn.net/jpg/02/91/14/23/360_F_291142315_1HDHshpssor08inb91jnXZxB02M3rIgi.jpg") no-repeat center center;
        background-size: cover;
    }

    #header_slider #slide_item:nth-child(2) {
        background: url("https://media.istockphoto.com/id/1436521782/photo/team-of-professional-cleaners-tidying-up-the-room.webp?b=1&s=170667a&w=0&k=20&c=E4Ru1OhTSNliZSNVwevKKDrH4CFjhnQfsNnPXCciBfc=") no-repeat center center;
        background-size: cover;
    }

    #header_slider #slide_item:nth-child(3) {
        background: url("https://st5.depositphotos.com/39034226/62384/i/450/depositphotos_623846382-stock-photo-female-cleaning-specialist-using-window.jpg") no-repeat center center;
        background-size: cover;
    }

    .background-svg {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='1440' height='250' preserveAspectRatio='none' viewBox='0 0 1440 250'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1006%26quot%3b)' fill='none'%3e%3cpath d='M44 250L294 0L540 0L290 250z' fill='url(%26quot%3b%23SvgjsLinearGradient1007%26quot%3b)'%3e%3c/path%3e%3cpath d='M284.6 250L534.6 0L812.1 0L562.1 250z' fill='url(%26quot%3b%23SvgjsLinearGradient1007%26quot%3b)'%3e%3c/path%3e%3cpath d='M480.20000000000005 250L730.2 0L862.2 0L612.2 250z' fill='url(%26quot%3b%23SvgjsLinearGradient1007%26quot%3b)'%3e%3c/path%3e%3cpath d='M734.8000000000001 250L984.8000000000001 0L1043.3000000000002 0L793.3000000000001 250z' fill='url(%26quot%3b%23SvgjsLinearGradient1007%26quot%3b)'%3e%3c/path%3e%3cpath d='M1400 250L1150 0L1021 0L1271 250z' fill='url(%26quot%3b%23SvgjsLinearGradient1008%26quot%3b)'%3e%3c/path%3e%3cpath d='M1160.4 250L910.4000000000001 0L553.4000000000001 0L803.4000000000001 250z' fill='url(%26quot%3b%23SvgjsLinearGradient1008%26quot%3b)'%3e%3c/path%3e%3cpath d='M934.8 250L684.8 0L360.79999999999995 0L610.8 250z' fill='url(%26quot%3b%23SvgjsLinearGradient1008%26quot%3b)'%3e%3c/path%3e%3cpath d='M694.1999999999999 250L444.19999999999993 0L307.69999999999993 0L557.6999999999999 250z' fill='url(%26quot%3b%23SvgjsLinearGradient1008%26quot%3b)'%3e%3c/path%3e%3cpath d='M1309.6589034824483 250L1440 119.65890348244838L1440 250z' fill='url(%26quot%3b%23SvgjsLinearGradient1007%26quot%3b)'%3e%3c/path%3e%3cpath d='M0 250L130.34109651755162 250L 0 119.65890348244838z' fill='url(%26quot%3b%23SvgjsLinearGradient1008%26quot%3b)'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1006'%3e%3crect width='1440' height='250' fill='white'%3e%3c/rect%3e%3c/mask%3e%3clinearGradient x1='0%25' y1='100%25' x2='100%25' y2='0%25' id='SvgjsLinearGradient1007'%3e%3cstop stop-color='rgba(86%2c 120%2c 194%2c 0.2)' offset='0'%3e%3c/stop%3e%3cstop stop-opacity='0' stop-color='rgba(86%2c 120%2c 194%2c 0.2)' offset='0.66'%3e%3c/stop%3e%3c/linearGradient%3e%3clinearGradient x1='100%25' y1='100%25' x2='0%25' y2='0%25' id='SvgjsLinearGradient1008'%3e%3cstop stop-color='rgba(86%2c 120%2c 194%2c 0.2)' offset='0'%3e%3c/stop%3e%3cstop stop-opacity='0' stop-color='rgba(86%2c 120%2c 194%2c 0.2)' offset='0.66'%3e%3c/stop%3e%3c/linearGradient%3e%3c/defs%3e%3c/svg%3e");
        background-size: cover;
        background-position: center bottom;
    }

    .show {
        display: block;
    }

    .group:hover .group-hover\:block {
        display: block;
    }

    .hidden-submenu {
        display: none;
    }

    /* General Styles */
    .hover-border-top:hover {
        border-top: 4px solid #FFFFFF;
    }

    .group:hover .group-hover\:block {
        display: block;
    }

    #main-nav {
        z-index: 50;
    }

    #banner-section {
        z-index: 10;
    }

    #main-nav .group:hover svg {
        transform: rotate(180deg);
    }

    /* New Nav */
    #main-nav .relative {
        position: relative;
    }

    #main-nav .absolute.left-0 {
        left: -100%;
    }

    #main-nav .group:hover .absolute.left-0 {
        left: 100%;
    }

    #main-nav .group:hover .transform {
        display: block;
        visibility: visible;
    }

    /* Adjustments for submenu visibility */
    .plumber-group:hover .plumber-group-hover\:block {
        display: block;
    }

    .electric-group:hover .electric-group-hover\:block {
        display: block;
    }

    .handyman-group:hover .handyman-group-hover\:block {
        display: block;
    }

    .deepclean-group:hover .deepclean-group-hover\:block {
        display: block;
    }

    .floorpolish-group:hover .floorpolish-group-hover\:block {
        display: block;
    }

    .floorclean-group:hover .floorclean-group-hover\:block {
        display: block;
    }

    .woodvanish-group:hover .woodvanish-group-hover\:block {
        display: block;
    }

    .decking-group:hover .decking-group-hover\:block {
        display: block;
    }

    @media (min-width: 1024px) {
        #main-nav {
            position: sticky;
            top: -50px;
            z-index: 50;
            transition: top 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
        }
    }

    #main-nav.scrolled {
        top: 0;
        background-color: #f69918;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    @media (min-width: 641px) {

        /* Adjust min-width as needed */
        #kol {
            margin-left: 15%;
        }
    }
</style>

<body class="bg-white relative">
    <div class="bg-black text-white text-center py-4" style="font-size: 12px;text-transform: uppercase;">
        <a href="https://wa.me/6596585757" target="_blank" rel="noopener noreferrer">
            <p style="font-family: sans-serif;font-weight: 500;letter-spacing: 3px;">WHATSAPP NOW FOR SERVICE HELP</p>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>

    <nav class="h-auto md:h-48">
        <div class="max-w-7xl mx-auto px-4">
            <div class="mt-10 flex flex-wrap justify-center md:space-x-64 space-y-4 md:space-y-0">
                <div class="flex items-center w-full md:w-auto" style="height: auto; width: auto;">
                    <div class="p-2">
                        <img src="{{ url('img/whatsapp.png') }}" alt="">
                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="text-lg font-semibold" style="font-family: 'Josefin Sans';">WHATSAPP NUMBER</p>
                        <p class="text-gray-500">+65 9658 5757</p>
                    </div>
                </div>
                <div class="w-full md:w-auto flex justify-center">
                    <img src="{{ url('img/icon2.png') }}" alt="" class="h-40">
                </div>
                <form onsubmit="checkAndRedirect(event)" class="flex items-center w-full md:w-auto space-x-2">
                    <div class="relative w-full md:w-auto" style="border-bottom: 3px solid #939090;">
                        <div class="flex border border-gray-300">
                            <input id="search-input" type="text" placeholder="ENTER KEYWORD" class="h-12 pl-10 pr-4 py-2 w-full md:w-auto text-black text-base rounded-l-lg focus:outline-none focus:border-brown-500 transition-colors duration-300 ease-in-out">
                            <button type="submit" class="relative flex items-center justify-center w-12 h-12 bg-brown-500 text-white rounded-r-lg hover:bg-brown-700 focus:outline-none transition-all duration-300 ease-in-out transform hover:scale-105">
                                <svg height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-276.79 -276.79 1039.18 1039.18" xml:space="preserve" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <g>
                                                <path style="fill:#E64C3D;" d="M447.5,477.85l30.3-30.3c4-4,4-10.4,0-14.4l-149.2-149.2l-44.7,44.7l149.2,149.2 C437.1,481.85,443.5,481.85,447.5,477.85z"></path>
                                                <path style="fill:#2C2F33;" d="M163.4,67.05c-53.2,0-96.5,43.3-96.5,96.5c0,5,4.1,9.1,9.1,9.1s9.1-4.1,9.1-9.1 c0-43.2,35.1-78.3,78.3-78.3c5,0,9.1-4.1,9.1-9.1C172.5,71.05,168.4,67.05,163.4,67.05z"></path>
                                                <path style="fill:#2C2F33;" d="M335,277.55c-3.5-3.5-9.3-3.5-12.8,0l-15.9,15.9l-21.1-21.1c25.9-28.9,41.7-67.1,41.7-108.9 c0-90.1-73.3-163.4-163.4-163.4S0,73.35,0,163.45s73.3,163.4,163.4,163.4c41.8,0,79.9-15.8,108.9-41.7l21.1,21.1l-15.9,15.9 c-1.7,1.7-2.7,4-2.7,6.4s1,4.7,2.7,6.4l141.9,141.9c5.6,5.6,13,8.7,20.9,8.7s15.3-3.1,20.9-8.7l15.7-15.7c5.6-5.6,8.7-13,8.7-20.9 s-3.1-15.3-8.7-20.9L335,277.55z M18.2,163.45c0-80.1,65.2-145.3,145.3-145.3s145.3,65.2,145.3,145.3s-65.2,145.3-145.3,145.3 S18.2,243.55,18.2,163.45z M464.1,448.45l-15.7,15.7c-2.2,2.2-5,3.4-8.1,3.4s-5.9-1.2-8.1-3.4l-135.5-135.5l31.9-31.9l135.5,135.5 c2.2,2.2,3.4,5,3.4,8.1S466.2,446.35,464.1,448.45z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <!-- Navigation Menu -->
    <!-- Scroll Up -->
    <div class="flex items-end justify-start fixed bottom-0 left-0 mb-4 ml-4 z-10">
        <div>
            <button onclick="scrollToTop()" title="Scroll to Top" class="block w-11 h-11 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:-rotate-12">
                <img class="object-cover object-center w-11 h-11 rounded-full" src="{{ url('img/up-arrow.png') }}" />
            </button>
        </div>
    </div>
    <!-- Scroll Up -->
   <!-- Header -->
    <nav id="main-nav" class="bg-white shadow-lg relative z-50 sticky scrolled">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 border-t" style="background-color: #f69918;">
            <div class="relative flex items-center justify-between h-16" id="kol">
                <div class="inset-y-0 left-0 flex items-center sm:hidden">
                    <button id="mobile-menu-toggle" type="button" class="inline-flex ml-2 bg-white items-center justify-center p-2 rounded-md text-gray-800 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start ">
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-16">
                            <div class=" " style="border-top: 4px solid rgb(255 255 255);">
                                <a href="/" class="text-gray-900 hover:text-brown-500 px-3 rounded-md text-lg font-medium">Home</a>
                            </div>
                            <div class="relative group hover-border-top">
                                <a href="/about" class="text-gray-900 hover:text-brown-500 px-3 rounded-md text-lg font-medium flex items-center">About Us
                                    <svg class="ml-1 transform transition-transform duration-500 ease-in-out" style="width: 1rem; height: 1rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M10 12.59l-4.95-4.95a1.41 1.41 0 10-2 2l7.45 7.5a1.41 1.41 0 002 0l7.45-7.5a1.41 1.41 0 10-2-2L10 12.59z" />
                                    </svg>
                                </a>
                                <div class="absolute hidden group-hover:block text-white bg-gray-800 shadow-lg rounded-md w-40 z-50">
                                    <a href="/review" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Review</a>
                                    <a href="/brands" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Our Brands</a>
                                    <a href="/mission" class="block px-4 py-2 hover:bg-gray-200 hover:text-black">Mission</a>
                                </div>
                            </div>
                            <div class="relative group  hover-border-top">
                                <a href="service" class="text-gray-900 hover:text-brown-500 px-3 rounded-md text-lg font-medium flex items-center">Service
                                    <svg class="ml-1 transform transition-transform duration-500 ease-in-out" style="width: 1rem; height: 1rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M10 12.59l-4.95-4.95a1.41 1.41 0 10-2 2l7.45 7.5a1.41 1.41 0 002 0l7.45-7.5a1.41 1.41 0 10-2-2L10 12.59z" />
                                    </svg>
                                </a>
                                <div class="absolute hidden group-hover:block text-white bg-gray-800 shadow-lg rounded-md w-40 z-50">
                                    <!-- Plumber -->
                                    <div class="relative plumber-group">
                                        <a href="/plumbing" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Plumber</a>
                                        <div class="absolute hidden plumber-group-hover:block text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50">

                                            <!-- Plumbing Install -->
                                            <div class="relative plumber-group">
                                                <a href="/plumbingInstall" onmouseenter="toggleSubMenu('pipe-installation')" onmouseleave="toggleSubMenu('pipe-installation')" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Plumbing
                                                    Install</a>
                                                <div id="pipe-installation" class="absolute hidden text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50" onmouseenter="toggleSubMenu('pipe-installation')" onmouseleave="toggleSubMenu('pipe-installation')">
                                                    <a href="/pipeInstall" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b plumbing-install">Pipe Installation</a>
                                                    <a href="/bidetSpray" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Bidet Spray</a>
                                                    <a href="/bathroomRack" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Bathroom Rack</a>
                                                </div>
                                            </div>
                                            <!-- Plumbing Install -->

                                            <!-- Plumbing Choke -->
                                            <a href="/plumbingChoke" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Plumbing
                                                Choke</a>
                                            <!-- Plumbing Choke -->

                                            <!-- Plumbing Leak-->
                                            <div class="relative plumber-group">
                                                <a href="/plumbingLeak" onmouseenter="toggleSubMenu('plumbing-leak')" onmouseleave="toggleSubMenu('plumbing-leak')" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Plumbing
                                                    Leak</a>
                                                <div id="plumbing-leak" class="absolute hidden text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50" onmouseenter="toggleSubMenu('plumbing-leak')" onmouseleave="toggleSubMenu('plumbing-leak')">
                                                    <a href="/tapLeak" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b plumbing-install">Leaking Tap</a>
                                                    <a href="/heaterLeak" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Heater Leak</a>
                                                    <a href="/showerService" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Shower Leak</a>
                                                </div>
                                            </div>
                                            <!--Plumbing Leak -->


                                            <!-- Water Heater-->
                                            <div class="relative plumber-group">
                                                <a href="/waterHeater" onmouseenter="toggleSubMenu('water-leak')" onmouseleave="toggleSubMenu('water-leak')" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Water Heater</a>
                                                <div id="water-leak" class="absolute hidden text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50" onmouseenter="toggleSubMenu('water-leak')" onmouseleave="toggleSubMenu('water-leak')">
                                                    <a href="/heaterinstall" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b plumbing-install">Water Heater Installation</a>
                                                    <a href="/waterheaterLeak" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Water Heater Leak</a>
                                                    <a href="/heaterRepair" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Water Heater Repair</a>
                                                </div>
                                            </div>
                                            <!--Water Heater -->


                                            <!-- Toilet Bowl-->
                                            <div class="relative plumber-group">
                                                <a href="/toiletBowl" onmouseenter="toggleSubMenu('toilet-bowl')" onmouseleave="toggleSubMenu('toilet-bowl')" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Toilet Bowl</a>
                                                <div id="toilet-bowl" class="absolute hidden text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50" onmouseenter="toggleSubMenu('toilet-bowl')" onmouseleave="toggleSubMenu('toilet-bowl')">
                                                    <a href="/toiletBowl" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b plumbing-install">Toilet Bowl Installation</a>
                                                    <a href="/plumbingChoke" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Toilet Bowl Choke</a>
                                                    <a href="/toiletRepair" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Toilet Bowl Choke Repair</a>
                                                </div>
                                            </div>
                                            <!--Toilet Bowl-->


                                            <!-- Shower
                                                Service-->
                                            <div class="relative plumber-group">
                                                <a href="/showerService" onmouseenter="toggleSubMenu('shower-service')" onmouseleave="toggleSubMenu('shower-service')" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Shower Service</a>
                                                <div id="shower-service" class="absolute hidden text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50" onmouseenter="toggleSubMenu('shower-service')" onmouseleave="toggleSubMenu('shower-service')">
                                                    <a href="/showerInstall" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b plumbing-install">Shower Installation</a>
                                                    <a href="/showerRepair" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Shower Repair</a>
                                                </div>
                                            </div>
                                            <!--Shower
                                                Service-->

                                            <a href="/tapFaucet" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Tap
                                                & Faucet</a>
                                            <a href="/bidetSpray" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Bidet
                                                Spray</a>
                                            <a href="/commercialPlumber" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Commercial
                                                Plumber</a>

                                        </div>
                                    </div>
                                    <!-- Plumber -->

                                    <!-- Electrician -->
                                    <div class="relative electric-group">
                                        <a href="/electric" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Electrician</a>
                                        <div class="absolute hidden electric-group-hover:block text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50">

                                            <!-- Electric Install -->
                                            <a href="/electricalInstall" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Electrical Installation</a>
                                            <!-- Electric Install -->

                                            <!-- Electric Repair -->
                                            <a href="/electricRepair" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Electrical Repair</a>
                                            <!-- Electric Repair -->


                                            <!-- Light Service -->
                                            <div class="relative electric-group">
                                                <a href="/lightService" onmouseenter="toggleSubMenu('light-service')" onmouseleave="toggleSubMenu('light-service')" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Light Service</a>
                                                <div id="light-service" class="absolute hidden text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50" onmouseenter="toggleSubMenu('light-service')" onmouseleave="toggleSubMenu('light-service')">
                                                    <a href="/lightInstall" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b plumbing-install">Light Installation</a>
                                                    <a href="/lightReplace" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Light Repair</a>
                                                </div>
                                            </div>
                                            <!--Light Service -->

                                            <a href="/switchService" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Electric Switch Service</a>
                                            <a href="/powerSocket" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Power Sockets</a>
                                            <a href="/hdrElectric" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">HDR Electrician</a>
                                            <a href="/smartSwitch" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">SmartSwitch</a>
                                        </div>
                                    </div>
                                    <!-- Electrician -->

                                    <!-- HandyMan -->
                                    <div class="relative handyman-group">
                                        <a href="/handyman" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">HandyMan</a>
                                        <div class="absolute hidden handyman-group-hover:block text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50">

                                            <!-- Rubbish Chute -->
                                            <a href="/rubbishChute" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Rubbish Chute</a>
                                            <!-- Rubbish Chute -->

                                            <!-- Cabinet Hinge -->
                                            <a href="/cabinetHinge" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Cabinet Hinge</a>
                                            <!-- Cabinet Hinge -->

                                            <!-- Hydraulic Hinge -->
                                            <a href="/hydraulic" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Hydraulic Hinge</a>
                                            <!-- Hydraulic Hinge -->

                                            <!-- Cupboard Hinge -->
                                            <a href="/cupboard" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Cupboard Hinge</a>
                                            <!-- Cupboard Hinge -->

                                            <!-- Handyman Drilling -->
                                            <a href="/drilling" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Handyman Drilling</a>
                                            <!-- Handyman Drilling -->

                                            <!-- TV Bracket Installation -->
                                            <a href="/tvBucket" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">TV Bracket Installation</a>
                                            <!-- TV Bracket Installation -->

                                            <!-- Wall Mounting Installation -->
                                            <a href="/wallMounting" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Wall Mounting Installation</a>
                                            <!-- Wall Mounting Installation -->

                                            <!-- PullUp Bar Installation -->
                                            <a href="/pullUp" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">PullUp Bar Installation</a>
                                            <!-- PullUp Bar Installation -->
                                        </div>
                                    </div>
                                    <!-- HandyMan -->

                                    <!-- Deep Cleaning -->
                                    <div class="relative deepclean-group">
                                        <a href="/deepclean" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Deep Cleaning</a>
                                        <div class="absolute hidden deepclean-group-hover:block text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50">

                                            <!-- Mattress Cleaning -->
                                            <a href="/matressClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Mattress Cleaning</a>
                                            <!-- Mattress Cleaning -->

                                            <!-- Mattress Deep Cleaning -->
                                            <a href="/matressDeepClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Mattress Deep Cleaning</a>
                                            <!-- Mattress Deep Cleaning -->

                                            <!-- Mattress Steam Cleaning -->
                                            <a href="/matressstemClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Mattress Steam Cleaning</a>
                                            <!-- Mattress Steam Cleaning -->

                                            <!-- Mattress Stain Removal -->
                                            <a href="/matrissStainClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Mattress Stain Removal</a>
                                            <!-- Mattress Stain Removal -->

                                            <!-- Sofa Cleaning -->
                                            <a href="/sofaClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Sofa Cleaning</a>
                                            <!-- Sofa Cleaning -->

                                            <!-- Sofa Deep Cleaning -->
                                            <a href="/sofaDeepClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Sofa Deep Cleaning</a>
                                            <!-- Sofa Deep Cleaning -->

                                            <!-- Sofa Stain Removal -->
                                            <a href="/sofaStain" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Sofa Stain Removal</a>
                                            <!-- Sofa Stain Removal -->
                                        </div>
                                    </div>
                                    <!-- Deep Cleaning -->


                                    <!-- Floor Polishing -->
                                    <div class="relative floorpolish-group">
                                        <a href="/floorpolish" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Floor Polishing</a>
                                        <div class="absolute hidden floorpolish-group-hover:block text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50">

                                            <!-- Marble Floor Polish -->
                                            <a href="/marbleFloorPolish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Marble Floor Polish</a>
                                            <!-- Marble Floor Polish -->

                                            <!-- Marble Polishing -->
                                            <a href="/marblePolish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Marble Polishing</a>
                                            <!-- Marble Polishing -->

                                            <!-- Parquet Polishing -->
                                            <a href="/parquetPolish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Parquet Polishing</a>
                                            <!-- Parquet Polishing -->

                                            <!-- Parquet Floor Polishing -->
                                            <a href="/parquetVarnish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Parquet Floor Polishing</a>
                                            <!-- Parquet Floor Polishing -->

                                            <!-- Wood Polishing -->
                                            <a href="/woodPolish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Wood Polishing</a>
                                            <!-- Wood Polishing -->

                                            <!-- Wood Floor Polishing -->
                                            <a href="/wood" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Wood Floor Polishing</a>
                                            <!-- Wood Floor Polishing -->

                                            <!-- Vinyl Floor Polishing -->
                                            <a href="/vinylFloorPolish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Vinyl Floor Polishing</a>
                                            <!-- Vinyl Floor Polishing -->
                                            <!-- Tile Floor Polishing -->
                                            <a href="/tileFloorPolish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Tile Floor Polishing</a>
                                            <!-- Tile Floor Polishing -->
                                        </div>
                                    </div>
                                    <!-- Floor Polishing -->


                                    <!-- Floor Cleaning -->
                                    <div class="relative floorclean-group">
                                        <a href="/floorclean" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Floor Cleaning</a>
                                        <div class="absolute hidden floorclean-group-hover:block text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50">

                                            <!-- Floor Deep Cleaning -->
                                            <a href="/floorclean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Floor Deep Cleaning</a>
                                            <!-- Floor Deep Cleaning -->

                                            <!-- Vinyl Cleaning -->
                                            <a href="/vinylClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Vinyl Cleaning</a>
                                            <!-- Vinyl Cleaning -->

                                            <!-- vinylFloorClean -->
                                            <a href="/vinylFloorClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">vinylFloorClean</a>
                                            <!-- vinylFloorClean -->

                                            <!-- Vinyl Floor Deep Cleaning -->
                                            <a href="/vinylDeepFloorClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Vinyl Floor Deep Cleaning</a>
                                            <!-- Vinyl Floor Deep Cleaning -->

                                            <!-- Terrazzo Cleaning -->
                                            <a href="/terrazzoClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Terrazzo Cleaning</a>
                                            <!-- Terrazzo Cleaning -->
                                        </div>
                                    </div>
                                    <!--Floor Cleaning -->

                                    <!-- Wood Varnishing -->
                                    <div class="relative woodvanish-group">
                                        <a href="/wood" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Wood Varnishing</a>
                                        <div class="absolute hidden woodvanish-group-hover:block text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50">

                                            <!-- Parquet Varnish -->
                                            <a href="/parquetVarnish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Parquet Varnish</a>
                                            <!-- Parquet Varnish -->
                                        </div>
                                    </div>
                                    <!--Wood Varnishing -->


                                    <!-- Decking -->
                                    <div class="relative decking-group">
                                        <a href="/decking" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Decking</a>
                                        <div class="absolute hidden decking-group-hover:block text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50">

                                            <!-- Balcony Decking -->
                                            <a href="/balconyDeck" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Balcony Decking</a>
                                            <!-- Balcony Decking -->

                                            <!-- Timber Decking -->
                                            <a href="/timberDeck" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Timber Decking</a>
                                            <!-- Timber Decking -->
                                        </div>
                                    </div>
                                    <!--Decking -->
                                </div>
                            </div>
                            <div class="hover-border-top ">
                                <a href="/price" class="text-gray-900 hover:text-brown-500 px-3 rounded-md text-lg font-medium" style="margin-top: 2px;">Price</a>
                            </div>
                            <div class="hover-border-top ">
                                <a href="/works" class="text-gray-900 hover:text-brown-500 px-3 rounded-md text-lg font-medium" style="margin-top: 2px;">Works</a>
                            </div>
                            <div class="hover-border-top">
                                <a href="/contact" class="text-gray-900 hover:text-brown-500 px-3 rounded-md text-lg font-medium" style="margin-top: 2px;">Contact
                                    Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile -->
            <div id="menu-overlay" style="position: fixed; top: 0; left: 0; height: 100%; width: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 999; display: none;"></div>

            <!-- Main Side Navigation -->
            <div id="mobile-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1000; transition: left 0.3s ease-in-out;">
                <div style="padding: 16px;">
                    <button id="close-menu" style="font-size: 33px;margin-left: 94%;margin-top: -13px;margin-bottom: 5%;">&times;</button>
                    <a href="/">
                        <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;"><a href="/" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%;">Home</a>
                        </div>
                    </a>

                    <div class="newMb" style="margin-left: -23px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <button id="about-us-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;"><span style="margin-left: 8%;">About Us</span><svg id="about-arrow" style="width: 1rem; height: 1rem; float: right; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>

                        </button>
                    </div>

                    <div class="newMb" style="margin-left: -23px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <button id="service-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;"><span style="margin-left: 8%;">Service </span><svg id="about-arrow" style="width: 1rem; height: 1rem; float: right; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>

                        </button>
                    </div>

                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <a href="/price" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%;">Price</a>
                    </div>

                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <a href="/works" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%;">Works</a>
                    </div>

                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <a href="/contact" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%;">Contact Us</a>
                    </div>
                </div>
            </div>

            <!-- Secondary Side Navigation (About Us Submenu) -->
            <div id="secondary-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out;">
                <div style="padding: 16px;">
                    <div style="margin-bottom: 6%;">
                        <div>
                            <button id="return-main-menu" style="font-size: 18px; padding: 8px;"><svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;">
                        <a href="/about" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">About Us</a>
                    </div>
                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <a href="/review" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Review</a>
                    </div>
                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <a href="/brands" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Our Brands</a>
                    </div>
                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <a href="/mission" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Mission</a>
                    </div>
                </div>
            </div>

            <!-- Service Submenu -->
            <div id="secondary-service-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out;">
                <div style="padding: 16px;">
                    <div style="margin-bottom: 6%;">
                        <div>
                            <button id="return-service-main-menu" style="font-size: 18px; padding: 8px;"><svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;">
                        <a href="/service" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Service</a>
                    </div>
                    <div class="newMb" style="margin-left: -23px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <button id="plumber-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;"><span style="margin-left: 8%;">Plumber </span><svg id="about-arrow" style="width: 1rem; height: 1rem; float: right; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Plumber Submenu -->
                    <div id="plumber-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out; overflow-y: auto; overflow-x: hidden;">
                        <div style="padding: 16px;">
                            <div style="margin-bottom: 6%;">
                                <div>
                                    <button id="return-plumber-menu" style="font-size: 18px; padding: 8px;">
                                        <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;background: #f3f0f0;">
                                <a href="/plumbing" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Plumber</a>
                            </div>

                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;">
                                <a href="/about" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Plumbing Install <svg id="about-arrow" style="width: 1rem; height: 1rem; float: right; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>

                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/review" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Plumbing Choke</a>
                            </div>
                            <div class="newMb" style="margin-left: -23px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <button id="plumbing-choke-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                                    <span style="margin-left: 8%;">Plumbing Leak</span>
                                    <svg id="about-arrow" style="width: 1rem; height: 1rem; float: right; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>

                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <button id="water-heater-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                                    <span style="margin-left: 5%;">Water Heater</span>
                                    <svg id="about-arrow" style="width: 1rem; height: 1rem; float: right; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <button id="toilet-bowl-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                                    <span style="margin-left: 5%;">Toilet Bowl</span>
                                    <svg id="about-arrow" style="width: 1rem; height: 1rem; float: right; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>

                            <!-- Toilet Bowl Submenu -->
                            <div id="submenu-toilet-bowl" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1002; transition: left 0.3s ease-in-out; overflow-y: auto; overflow-x: hidden;">
                                <div style="padding: 16px;">
                                    <div style="margin-bottom: 6%;">
                                        <div>
                                            <button id="return-toilet-bowl-menu" style="font-size: 18px; padding: 8px;">
                                                <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;background: #f3f0f0;">
                                        <a href="/toiletBowl" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Toilet Bowl</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/toiletBowl" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Toilet Bowl Installation</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/plumbingChoke" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Toilet Bowl Choke</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/toiletRepair" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Toilet Bowl Choke Repair</a>
                                    </div>
                                </div>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <button id="shower-service-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                                    <span style="margin-left: 5%;">Shower Service</span>
                                    <svg id="about-arrow" style="width: 1rem; height: 1rem; float: right; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>

                            <!-- Shower Service Submenu -->
                            <div id="submenu-shower-service" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1002; transition: left 0.3s ease-in-out; overflow-y: auto; overflow-x: hidden;">
                                <div style="padding: 16px;">
                                    <div style="margin-bottom: 6%;">
                                        <div>
                                            <button id="return-shower-service-menu" style="font-size: 18px; padding: 8px;">
                                                <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;background: #f3f0f0;">
                                        <a href="/showerService" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Shower Service</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/showerInstall" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Shower Installation</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/showerRepair" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Shower Repair</a>
                                    </div>
                                </div>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/tapFaucet" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Tap & Faucet</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/bidetSpray" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Bidet Spray</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/commercialPlumber" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Commercial Plumber</a>
                            </div>



                            <!-- Submenu for 222 -->
                            <div id="submenu-222" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1002; transition: left 0.3s ease-in-out; overflow-y: auto; overflow-x: hidden;">
                                <div style="padding: 16px;">
                                    <div style="margin-bottom: 6%;">
                                        <div>
                                            <button id="return-submenu-222" style="font-size: 18px; padding: 8px;">
                                                <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;background: #f3f0f0;">
                                        <a href="/plumbingInstall" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Plumbing Install</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;">
                                        <a href="/pipeInstall" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Pipe Installation</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;">
                                        <a href="/bidetSpray" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Bidet Spray</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/bathroomRack" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Bathroom Rack</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Submenu for Plumbing leak -->
                            <div id="submenu-plumbing-choke" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1002; transition: left 0.3s ease-in-out; overflow-y: auto; overflow-x: hidden;">
                                <div style="padding: 16px;">
                                    <div style="margin-bottom: 6%;">
                                        <div>
                                            <button id="return-plumbing-choke-menu" style="font-size: 18px; padding: 8px;">
                                                <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;background: #f3f0f0;">
                                        <a href="/plumbingLeak" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Plumbing Leak</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/tapLeak" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Leaking Tap</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/heaterLeak" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Heater Leak</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/showerService" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Shower Leak</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Water Heater Submenu -->
                            <div id="submenu-water-heater" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1002; transition: left 0.3s ease-in-out; overflow-y: auto; overflow-x: hidden;">
                                <div style="padding: 16px;">
                                    <div style="margin-bottom: 6%;">
                                        <div>
                                            <button id="return-water-heater-menu" style="font-size: 18px; padding: 8px;">
                                                <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;background: #f3f0f0;">
                                        <a href="/waterHeater" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Water Heater</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/heaterinstall" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Water Heater Install</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/waterheaterLeak" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Water Heater Leak</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/heaterRepair" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Water Heater Repair</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Electrician Button in Main Menu -->
                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <button id="electrician-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                            <span style="margin-left: 5%;">Electrician</span>
                            <svg id="electrician-arrow" style="width: 1rem;height: 1rem;float: right;transition: transform 0.3s ease;margin-right: 3%;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Electrician Submenu -->
                    <div id="electrician-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out; overflow-y: auto; overflow-x: hidden;">
                        <div style="padding: 16px;">
                            <div style="margin-bottom: 6%;">
                                <div>
                                    <button id="return-electrician-menu" style="font-size: 18px; padding: 8px;">
                                        <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;background: #f3f0f0;">
                                <a href="/electric" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Electrician</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;">
                                <a href="/electricalInstall" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Electrical Install</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/electricRepair" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Electrical Repair</a>
                            </div>
                            <!-- Light Service Button in Main Menu -->
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <button id="light-service-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                                    <span style="margin-left: 5%;">Light Service</span>
                                    <svg id="light-service-arrow" style="width: 1rem; height: 1rem; float: right; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>

                            <!-- Light Service Submenu -->
                            <div id="light-service-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out;">
                                <div style="padding: 16px;">
                                    <div style="margin-bottom: 6%;">
                                        <div>
                                            <button id="return-light-service-menu" style="font-size: 18px; padding: 8px;">
                                                <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Light Service Submenu Items -->
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;">
                                        <a href="/lightReplace" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Light Bulb Replacement</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/lightInstall" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Light Fixture Installation</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/lightService" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">LED Upgrade</a>
                                    </div>
                                </div>
                            </div>

                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/switchService" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Electrical Switch Service</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/powerSocket" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Power Socket</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/hdrElectric" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">HDR Electrician</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/smartSwitch" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Smart Switch</a>
                            </div>
                        </div>
                    </div>


                    <!-- Handyman Button in Main Menu -->
                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <button id="handyman-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                            <span style="margin-left: 5%;">Handyman</span>
                            <svg id="handyman-arrow" style="width: 1rem;height: 1rem;float: right;transition: transform 0.3s ease;margin-right: 3%;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Handyman Submenu -->
                    <div id="handyman-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out;">
                        <div style="padding: 16px;">
                            <div style="margin-bottom: 6%;">
                                <div>
                                    <button id="return-handyman-menu" style="font-size: 18px; padding: 8px;">
                                        <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <!-- Handyman Submenu Items -->
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;background: #f3f0f0;">
                                <a href="/handyman" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">HandyMan</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/rubbishChute" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Rubbish Chute</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/cupboard" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Cupboard Hinge</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/cabinetHinge" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Cabinet Hinge</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/hydraulic" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Hydraulic Hinge</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/drilling" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Handyman Drilling</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/tvBucket" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">TV Bracket Installation</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/wallMounting" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Wall Mounting Install</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/pullUp" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Pullup Bar Install</a>
                            </div>
                        </div>
                    </div>

                    <!-- Deep Cleaning Button in Main Menu -->
                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <button id="deepclean-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                            <span style="margin-left: 5%;">Deep Cleaning</span>
                            <svg id="deepclean-arrow" style="width: 1rem;height: 1rem;float: right;transition: transform 0.3s ease;margin-right: 3%;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Deep Cleaning Submenu -->
                    <div id="deepclean-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out;">
                        <div style="padding: 16px;">
                            <div style="margin-bottom: 6%;">
                                <div>
                                    <button id="return-deepclean-menu" style="font-size: 18px; padding: 8px;">
                                        <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <!-- Deep Cleaning Submenu Items -->
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;background: #f3f0f0;">
                                <a href="/deepclean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Deep Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/matressClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Mattress Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/matressDeepClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Mattress Deep Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/cabinetHinge" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Cabinet Hinge</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/matressstemClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Mattress Steam Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/matrissStainClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Mattress Stain Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/sofaClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Sofa Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/sofaDeepClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Sofa Deep Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="fabricSofaClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Fabric Sofa Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/unholsteryClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Upholstery Cleaning</a>
                            </div>
                        </div>
                    </div>

                    <!-- Floor Polishing Button in Main Menu -->
                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <button id="floor-polishing-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                            <span style="margin-left: 5%;">Floor Polishing</span>
                            <svg id="floor-polishing-arrow" style="width: 1rem;height: 1rem;float: right;transition: transform 0.3s ease;margin-right: 3%;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Floor Polishing Submenu -->
                    <div id="floor-polishing-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out;">
                        <div style="padding: 16px;">
                            <div style="margin-bottom: 6%;">
                                <div>
                                    <button id="return-floor-polishing-menu" style="font-size: 18px; padding: 8px;">
                                        <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <!-- Floor Polishing Submenu Items -->
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;background: #f3f0f0;">
                                <a href="/floorpolish" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Floor Polishing</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/marbleFloorPolish" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Marble Floor Polish</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/marblePolish" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Marble Polishing</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/parquetPolish" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Parquet Polishing</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/parquetVarnish" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Parquet Floor Polishing</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/woodPolish" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Wood Polishing</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/wood" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Wood Floor Polishing</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/vinylFloorPolish" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Vinyl Floor Polishing</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/tileFloorPolish" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Tile Floor Polishing</a>
                            </div>
                        </div>
                    </div>

                    <!-- Floor Cleaning Button in Main Menu -->
                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <button id="floor-cleaning-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                            <span style="margin-left: 5%;">Floor Cleaning</span>
                            <svg id="floor-cleaning-arrow" style="width: 1rem;height: 1rem;float: right;transition: transform 0.3s ease;margin-right: 3%;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Floor Cleaning Submenu -->
                    <div id="floor-cleaning-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out;">
                        <div style="padding: 16px;">
                            <div style="margin-bottom: 6%;">
                                <div>
                                    <button id="return-floor-cleaning-menu" style="font-size: 18px; padding: 8px;">
                                        <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <!-- Floor Cleaning Submenu Items -->
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;background: #f3f0f0;">
                                <a href="/floorclean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Floor Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/vinylClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Vinyl Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/vinylFloorClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Vinyl Floor Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/vinylDeepFloorClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Vinyl Floor Deep Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/terrazzoClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Terrazzo Cleaning</a>
                            </div>
                        </div>
                    </div>

                    <!-- Wood Varnishing Button in Main Menu -->
                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <button id="wood-varnishing-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                            <span style="margin-left: 5%;">Wood Varnishing</span>
                            <svg id="wood-varnishing-arrow" style="width: 1rem;height: 1rem;float: right;transition: transform 0.3s ease;margin-right: 3%;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Wood Varnishing Submenu -->
                    <div id="wood-varnishing-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out;">
                        <div style="padding: 16px;">
                            <div style="margin-bottom: 6%;">
                                <div>
                                    <button id="return-wood-varnishing-menu" style="font-size: 18px; padding: 8px;">
                                        <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <!-- Wood Varnishing Submenu Items -->
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;">
                                <a href="/wood" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Wood Varnishing</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/parquetVarnish" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Parque Varnish</a>
                            </div>
                        </div>
                    </div>

                    <!-- Decking Button in Main Menu -->
                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <button id="decking-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                            <span style="margin-left: 5%;">Decking</span>
                            <svg id="decking-arrow" style="width: 1rem;height: 1rem;float: right;transition: transform 0.3s ease;margin-right: 3%;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Decking Submenu -->
                    <div id="decking-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out;">
                        <div style="padding: 16px;">
                            <div style="margin-bottom: 6%;">
                                <div>
                                    <button id="return-decking-menu" style="font-size: 18px; padding: 8px;">
                                        <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <!-- Decking Submenu Items -->
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;">
                                <a href="/decking" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Decking</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/balconyDeck" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Balcony Decking</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/timberDeck" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Timber Decking</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </nav>

    <style>
        .newMb:hover {
            background-color: #f69918
        }
    </style>
    <!-- Header -->


    <!-- Banner Section -->
    <section class="bg-cover bg-center relative parallax" style="background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20220514/pngtree-new-finance-project-presented-to-business-partners-by-team-photo-image_45616880.jpg'); background-size: cover; background-repeat: no-repeat; height: 45vh; background-attachment: fixed;">
       <div class="overlay" style="background: rgba(0, 0, 0, 0.5); position: absolute; top: 0; left: 0; right: 0; bottom: 0;"></div>
        <div class="content" style="position: relative; z-index: 1; display: flex; flex-direction: column; padding-left: 1rem; padding-right: 1rem; text-align: center; gap: 1rem;">
            <h1 style="font-size: 2.5rem; color: white; font-weight: 100; margin-bottom: 1.5rem;">Brand</h1>
            <p style="font-size: 1rem; color: antiquewhite;">Home / Brand</p>
        </div>
    </section>

    <section class="py-8 sm:py-16 md:py-24 flex items-center justify-center mt-12 mb-12" style="background-color: #efefef;">
        <div class="mx-auto max-w-[43rem]">
            <div class="text-center">
                <p class="text-lg font-medium leading-8 text-gray-500">Explore Our Brands</p>
                <h1
                    class="my-3 sm:my-4 md:my-8 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-10 tracking-tight " style="color: #777777;">
                    Excited to Reveal Our Expanded Brand Network
                </h1>
                <p class="text-lg leading-relaxed text-slate-500">Explore our unified home services brands under the allhouseworks Services Network, offering a seamless and comprehensive solution for homeowners. <br> Easily book a variety of home services through allhouseworks Singapore.

                </p>
            </div>
        </div>
    </section>



    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <div class="mb-4 flex flex-col items-center md:mb-8 lg:flex-row lg:justify-between">
                <h2 class="mb-2 text-center text-2xl font-bold text-gray-800 lg:mb-0 lg:text-3xl">Explore Our Brands</h2>
            </div>

            <div class="grid grid-cols-2 gap-4 rounded-lg md:grid-cols-3 lg:gap-6">
                <!-- logo - start -->
                <a href="/plumbing">
                    <div class="flex h-16 items-center justify-center rounded-lg bg-gray-100 p-4 text-gray-400 sm:h-32">
                        <img src="{{ url('img/plumber.png') }}" alt="Image 1" class="w-48 h-16 hover:zoom-in">
                    </div>
                </a>
                <!-- logo - end -->

                <!-- logo - start -->
                <a href="/matressClean">
                    <div class="flex h-16 items-center justify-center rounded-lg bg-gray-100 p-4 text-gray-400 sm:h-32">
                        <img src="{{ url('img/matress.png') }}" alt="Image 2" class="w-52 h-20 hover:zoom-in">
                    </div>
                </a>
                <!-- logo - end -->

                <!-- logo - start -->
                <a href="/electric">
                    <div class="flex h-16 items-center justify-center rounded-lg bg-gray-100 p-4 text-gray-400 sm:h-32">
                        <img src="{{ url('img/daylight.png') }}" alt="Image 3" class="w-48 h-16 hover:zoom-in">
                    </div>
                </a>
                <!-- logo - end -->

                <!-- logo - start -->
                <a href="/handyman">
                    <div class="flex h-16 items-center justify-center rounded-lg bg-gray-100 p-4 text-gray-400 sm:h-32">
                        <img src="{{ url('img/handy.png') }}" alt="Image 4" class="w-54 h-16 hover:zoom-in">
                    </div>
                </a>
                <!-- logo - end -->

                <!-- logo - start -->
                <a href="/sofaClean">
                    <div class="flex h-16 items-center justify-center rounded-lg bg-gray-100 p-4 text-gray-400 sm:h-32">
                        <img src="{{ url('img/sofa.png') }}" alt="Image 5" class="w-48 h-16 hover:zoom-in">
                    </div>
                </a>
                <!-- logo - end -->

                <!-- logo - start -->
                <a href="/waterHeater">
                    <div class="flex h-16 items-center justify-center rounded-lg bg-gray-100 p-4 text-gray-400 sm:h-32">
                        <img src="{{ url('img/water.png') }}" alt="Image 5" class="w-48 h-16 hover:zoom-in">
                    </div>
                </a>
                <!-- logo - start -->
                <a href="/rubbishChute">
                    <div class="flex h-16 items-center justify-center rounded-lg bg-gray-100 p-4 text-gray-400 sm:h-32">
                        <img src="{{ url('img/rubbish.png') }}" alt="Image 8" class="w-56 h-20 hover:zoom-in">
                    </div>
                </a>
                <!-- logo - end -->

                <!-- logo - start -->
                <a href="/floorclean">
                    <div class="flex h-16 items-center justify-center rounded-lg bg-gray-100 p-4 text-gray-400 sm:h-32">
                        <img src="{{ url('img/floor.png') }}" alt="Image 7" class="w-80 h-20 hover:zoom-in">
                    </div>
                </a>
                <!-- logo - end -->
            </div>
        </div>
    </div>



    <!-- MR. Plumber -->
    <div class="relative flex flex-col items-center mx-auto lg:flex-row-reverse lg:max-w-5xl lg:mt-12 xl:max-w-6xl mb-10">
        <div class="w-full h-64 lg:w-1/2 lg:h-auto">
            <img class="h-full w-full object-cover" src="https://media.istockphoto.com/id/1361116682/photo/plumber-fixing-a-leaking-bathroom-faucet.jpg?s=612x612&w=0&k=20&c=THa1uoYgW4gGz0C8YMqenM58UFY-uD1X79dP3obYLLI=" alt="Winding mountain road">
        </div>

        <div class="max-w-lg bg-white md:max-w-2xl md:z-10  md:absolute md:top-0 md:mt-48 lg:w-3/5 lg:left-0 lg:mt-20 lg:ml-20 xl:mt-10 xl:ml-12" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
            <div class="flex flex-col p-12 md:px-16">
                <h2 class="text-2xl font-medium uppercase text-green-800 lg:text-4xl">MR. Plumber</h2>
                <p class="mt-4">
                    Mr Plumber is Singapore’s top-rated plumber, with the best reviews on Google and Facebook. They offer a one-stop solution for plumbing services, including Plumbing Chokes, Installations, Leaks, Water Heaters, Toilet Bowls, and Tap Installations.

                    Their team of PUB-licensed and BCA-trained specialists also provide HDB and Emergency plumbing services. Over the years, Mr Plumber has served thousands of satisfied customers, handling both residential and commercial projects.

                </p>
                <div class="mt-8">
                    <a href="/plumbing"
                        class="inline-block w-full text-center text-lg font-medium text-gray-100 bg-green-600 border-solid border-2 border-gray-600 py-4 px-10 hover:bg-green-800 hover:shadow-md md:w-48">Read
                        More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- MR. Plumber -->
    <div class=" w-full h-px max-w-6xl mx-auto my-32"
        style="background-image: linear-gradient(90deg, rgba(149, 131, 198, 0) 1.46%, rgba(149, 131, 198, 0.6) 40.83%, rgba(149, 131, 198, 0.3) 65.57%, rgba(149, 131, 198, 0) 107.92%);">
    </div>
    <!--All Sofa-->
    <div class="relative flex flex-col items-center mx-auto lg:flex-row lg:max-w-5xl lg:mt-30 xl:max-w-6xl mb-10 mt-32">
        <div class="w-full h-64 lg:w-1/2 lg:h-auto">
            <img class="h-full w-full object-cover" src="https://clean-and-service-website-storage.s3-ap-southeast-1.amazonaws.com/media-staging/87/best-sofa-cleaning-service-dhaka.jpg" alt="Winding mountain road">
        </div>

        <div class="max-w-lg bg-white md:max-w-2xl md:z-10 md:shadow-lg md:absolute md:top-0 md:mt-48 lg:w-3/5 lg:right-0 lg:mt-20 lg:mr-20 xl:mt-10 xl:mr-12">
            <div class="flex flex-col p-12 md:px-16">
                <h2 class="text-2xl font-medium uppercase text-green-800 lg:text-4xl">All Sofa</h2>
                <p class="mt-4">
                    All Sofa is Singapore’s top-rated sofa cleaning service, with the best reviews on Google and Facebook. They offer a comprehensive range of cleaning services, including deep sofa cleaning, stain removal, leather conditioning, fabric protection, and upholstery cleaning.

                    Their team of experienced professionals uses eco-friendly cleaning solutions and state-of-the-art equipment to ensure your sofas are spotless and well-maintained. Over the years, All Sofa has served thousands of satisfied customers, handling both residential and commercial sofa cleaning projects.
                </p>
                <div class="mt-8">
                    <a href="/matressClean" class="inline-block w-full text-center text-lg font-medium text-gray-100 bg-green-600 border-solid border-2 border-gray-600 py-4 px-10 hover:bg-green-800 hover:shadow-md md:w-48">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--All Sofa-->

    <div class=" w-full h-px max-w-6xl mx-auto my-32"
        style="background-image: linear-gradient(90deg, rgba(149, 131, 198, 0) 1.46%, rgba(149, 131, 198, 0.6) 40.83%, rgba(149, 131, 198, 0.3) 65.57%, rgba(149, 131, 198, 0) 107.92%);">
    </div>

    <!-- Daylight -->
    <div class="relative flex flex-col items-center mx-auto lg:flex-row-reverse lg:max-w-5xl lg:mt-36 xl:max-w-6xl mb-10">
        <div class="w-full h-64 lg:w-1/2 lg:h-auto">
            <img class="h-full w-full object-cover" src="https://5.imimg.com/data5/PG/QN/VQ/SELLER-13916676/led-light-repair-service-500x500.jpg" alt="Winding mountain road">
        </div>

        <div class="max-w-lg bg-white md:max-w-2xl md:z-10 md:absolute md:top-0 md:mt-48 lg:w-3/5 lg:left-0 lg:mt-20 lg:ml-20 xl:mt-10 xl:ml-12" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
            <div class="flex flex-col p-12 md:px-16">
                <h2 class="text-2xl font-medium uppercase text-green-800 lg:text-4xl">Daylight Electric</h2>
                <p class="mt-4">
                    Daylight Electric is Singapore’s top-rated electronics repair service, with the best reviews on Google and Facebook. They offer a one-stop solution for electronic services, including appliance repairs, wiring installations, circuit troubleshooting, aircon servicing, and home automation setups.

                    Their team of certified and experienced technicians also provides HDB and emergency electrical services. Over the years, Daylight Electric has served thousands of satisfied customers, handling both residential and commercial electronic projects.

                </p>
                <div class="mt-8">
                    <a href="/electric"
                        class="inline-block w-full text-center text-lg font-medium text-gray-100 bg-green-600 border-solid border-2 border-gray-600 py-4 px-10 hover:bg-green-800 hover:shadow-md md:w-48">Read
                        More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Daylight -->

    <div class=" w-full h-px max-w-6xl mx-auto my-32"
        style="background-image: linear-gradient(90deg, rgba(149, 131, 198, 0) 1.46%, rgba(149, 131, 198, 0.6) 40.83%, rgba(149, 131, 198, 0.3) 65.57%, rgba(149, 131, 198, 0) 107.92%);">
    </div>

    <!--Handyman-->
    <div class="relative flex flex-col items-center mx-auto lg:flex-row lg:max-w-5xl lg:mt-30 xl:max-w-6xl mb-10 mt-32">
        <div class="w-full h-64 lg:w-1/2 lg:h-auto">
            <img class="h-full w-full object-cover" src="https://media.istockphoto.com/id/1439782187/photo/electrician-with-screwdriver-repairing-power-socket-indoors.jpg?s=612x612&w=0&k=20&c=RIGv8WdTyElA4zP_wCnNb_M5ayF-W8-Pe1el5DK_yWM=" alt="Winding mountain road">
        </div>

        <div class="max-w-lg bg-white md:max-w-2xl md:z-10 md:shadow-lg md:absolute md:top-0 md:mt-48 lg:w-3/5 lg:right-0 lg:mt-20 lg:mr-20 xl:mt-10 xl:mr-12">
            <div class="flex flex-col p-12 md:px-16">
                <h2 class="text-2xl font-medium uppercase text-green-800 lg:text-4xl">Handyman</h2>
                <p class="mt-4">
                    HandyMan is Singapore’s premier handyman service, renowned for its outstanding reviews on Google and Facebook. We offer a wide array of home repair and maintenance services, including plumbing, electrical work, painting, carpentry, and general repairs.

                    Our team of skilled professionals uses top-quality tools and materials to ensure every job is completed efficiently and to the highest standards. With years of experience, HandyMan has served thousands of satisfied customers, addressing both residential and commercial needs. Whether it's a minor fix or a major project, we’re committed to providing reliable and top-notch service for your home or business.
                </p>
                <div class="mt-8">
                    <a href="/handyman" class="inline-block w-full text-center text-lg font-medium text-gray-100 bg-green-600 border-solid border-2 border-gray-600 py-4 px-10 hover:bg-green-800 hover:shadow-md md:w-48">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--Handyman-->

    <div class=" w-full h-px max-w-6xl mx-auto my-32"
        style="background-image: linear-gradient(90deg, rgba(149, 131, 198, 0) 1.46%, rgba(149, 131, 198, 0.6) 40.83%, rgba(149, 131, 198, 0.3) 65.57%, rgba(149, 131, 198, 0) 107.92%);">
    </div>

    <!-- Water Heater -->
    <div class="relative flex flex-col items-center mx-auto lg:flex-row-reverse lg:max-w-5xl lg:mt-36 xl:max-w-6xl mb-10">
        <div class="w-full h-64 lg:w-1/2 lg:h-auto">
            <img class="h-full w-full object-cover" src="https://westernrooter.com/wp-content/uploads/2023/10/water-heater-maintenance-western-rooter.png" alt="Winding mountain road">
        </div>

        <div class="max-w-lg bg-white md:max-w-2xl md:z-10 md:absolute md:top-0 md:mt-48 lg:w-3/5 lg:left-0 lg:mt-20 lg:ml-20 xl:mt-10 xl:ml-12" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
            <div class="flex flex-col p-12 md:px-16">
                <h2 class="text-2xl font-medium uppercase text-green-800 lg:text-4xl">Water Heater</h2>
                <p class="mt-4">
                    Daylight Electric is Singapore’s top-rated electronics repair service, with the best reviews on Google and Facebook. They offer a one-stop solution for electronic services, including appliance repairs, wiring installations, circuit troubleshooting, aircon servicing, and home automation setups.

                    Their team of certified and experienced technicians also provides HDB and emergency electrical services. Over the years, Daylight Electric has served thousands of satisfied customers, handling both residential and commercial electronic projects.

                </p>
                <div class="mt-8">
                    <a href="/waterHeater"
                        class="inline-block w-full text-center text-lg font-medium text-gray-100 bg-green-600 border-solid border-2 border-gray-600 py-4 px-10 hover:bg-green-800 hover:shadow-md md:w-48">Read
                        More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Water Heater -->

    <div class=" w-full h-px max-w-6xl mx-auto my-32"
        style="background-image: linear-gradient(90deg, rgba(149, 131, 198, 0) 1.46%, rgba(149, 131, 198, 0.6) 40.83%, rgba(149, 131, 198, 0.3) 65.57%, rgba(149, 131, 198, 0) 107.92%);">
    </div>

    <!--Sofa Cleaning-->
    <div class="relative flex flex-col items-center mx-auto lg:flex-row lg:max-w-5xl lg:mt-30 xl:max-w-6xl mb-10 mt-32">
        <div class="w-full h-64 lg:w-1/2 lg:h-auto">
            <img class="h-full w-full object-cover" src="https://st3.depositphotos.com/1010613/14045/i/450/depositphotos_140458748-stock-photo-worker-cleaning-sofa.jpg" alt="Winding mountain road">
        </div>

        <div class="max-w-lg bg-white md:max-w-2xl md:z-10 md:shadow-lg md:absolute md:top-0 md:mt-48 lg:w-3/5 lg:right-0 lg:mt-20 lg:mr-20 xl:mt-10 xl:mr-12">
            <div class="flex flex-col p-12 md:px-16">
                <h2 class="text-2xl font-medium uppercase text-green-800 lg:text-4xl">Sofa Cleaning</h2>
                <p class="mt-4">
                    SofaClean is Singapore’s leading sofa cleaning service, celebrated for its exceptional reviews on Google and Facebook. We provide a comprehensive range of cleaning solutions, including deep sofa cleaning, stain removal, leather conditioning, fabric protection, and upholstery cleaning.

                    Our team of skilled professionals uses high-quality, eco-friendly cleaning products and advanced equipment to ensure your sofas are thoroughly cleaned and maintained to the highest standards. With years of experience, SofaClean has satisfied thousands of customers, handling both residential and commercial cleaning projects. Whether you need a deep clean or routine maintenance, we’re dedicated to delivering outstanding, reliable service for your home or business.
                </p>
                <div class="mt-8">
                    <a href="/sofaClean" class="inline-block w-full text-center text-lg font-medium text-gray-100 bg-green-600 border-solid border-2 border-gray-600 py-4 px-10 hover:bg-green-800 hover:shadow-md md:w-48">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--Sofa Cleaning-->

    <div class=" w-full h-px max-w-6xl mx-auto my-32"
        style="background-image: linear-gradient(90deg, rgba(149, 131, 198, 0) 1.46%, rgba(149, 131, 198, 0.6) 40.83%, rgba(149, 131, 198, 0.3) 65.57%, rgba(149, 131, 198, 0) 107.92%);">
    </div>

    <!-- Floor Polish -->
    <div class="relative flex flex-col items-center mx-auto lg:flex-row-reverse lg:max-w-5xl lg:mt-36 xl:max-w-6xl mb-10">
        <div class="w-full h-64 lg:w-1/2 lg:h-auto">
            <img class="h-full w-full object-cover" src="https://www.helpling.com.sg/wp-content/uploads/2023/06/Helpling-floor-polishing-services.webp" alt="Winding mountain road">
        </div>

        <div class="max-w-lg bg-white md:max-w-2xl md:z-10 md:absolute md:top-0 md:mt-48 lg:w-3/5 lg:left-0 lg:mt-20 lg:ml-20 xl:mt-10 xl:ml-12" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
            <div class="flex flex-col p-12 md:px-16">
                <h2 class="text-2xl font-medium uppercase text-green-800 lg:text-4xl">Floor Polish</h2>
                <p class="mt-4">
                    ShinePro is Singapore’s top-rated floor polishing service, known for its exceptional reviews on Google and Facebook. We offer a comprehensive range of floor care solutions, including polishing, buffing, stain removal, and maintenance for various types of flooring.

                    Our team of certified and experienced professionals uses advanced equipment and high-quality products to ensure your floors are polished to a brilliant shine and well-maintained. With years of experience, ShinePro has served thousands of satisfied customers, managing both residential and commercial floor polishing projects. Whether you need a fresh polish or regular upkeep, we’re committed to delivering outstanding and reliable service for your home or business.
                </p>
                <div class="mt-8">
                    <a href="/floorclean"
                        class="inline-block w-full text-center text-lg font-medium text-gray-100 bg-green-600 border-solid border-2 border-gray-600 py-4 px-10 hover:bg-green-800 hover:shadow-md md:w-48">Read
                        More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Floor Polish -->

    <div class=" w-full h-px max-w-6xl mx-auto my-32"
        style="background-image: linear-gradient(90deg, rgba(149, 131, 198, 0) 1.46%, rgba(149, 131, 198, 0.6) 40.83%, rgba(149, 131, 198, 0.3) 65.57%, rgba(149, 131, 198, 0) 107.92%);">
    </div>

    <!--Rubbish Chute-->
    <div class="relative flex flex-col items-center mx-auto lg:flex-row lg:max-w-5xl lg:mt-30 xl:max-w-6xl mb-10 mt-32">
        <div class="w-full h-64 lg:w-1/2 lg:h-auto">
            <img class="h-full w-full object-cover" src="https://hengplumbing.com/wp-content/uploads/2019/01/Rubbish-Chute-3.jpg" alt="Winding mountain road">
        </div>

        <div class="max-w-lg bg-white md:max-w-2xl md:z-10 md:shadow-lg md:absolute md:top-0 md:mt-48 lg:w-3/5 lg:right-0 lg:mt-20 lg:mr-20 xl:mt-10 xl:mr-12">
            <div class="flex flex-col p-12 md:px-16">
                <h2 class="text-2xl font-medium uppercase text-green-800 lg:text-4xl">Rubbish Chute</h2>
                <p class="mt-4">
                    ClearChute is Singapore’s premier rubbish chute cleaning service, highly acclaimed with top reviews on Google and Facebook. We specialize in a comprehensive range of chute maintenance services, including thorough cleaning, deodorizing, and blockage removal.

                    Our team of skilled professionals utilizes advanced equipment and eco-friendly cleaning solutions to ensure your rubbish chute is hygienic, efficient, and odor-free. With years of experience, ClearChute has served thousands of satisfied customers, addressing both residential and commercial needs. Whether you need routine maintenance or urgent cleaning, we are dedicated to providing exceptional, reliable service for your property.
                </p>
                <div class="mt-8">
                    <a href="/rubbishChute" class="inline-block w-full text-center text-lg font-medium text-gray-100 bg-green-600 border-solid border-2 border-gray-600 py-4 px-10 hover:bg-green-800 hover:shadow-md md:w-48">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--Rubbish Chute-->


    <section class="bg-gray-100 h-auto flex flex-wrap justify-center p-4 mt-56">
        <h2 class="w-full text-center mt-8 mb-8 text-lg font-bold">AllHouseWork's Group's Network of Service Brands</h2>
        <div class="w-12/12 mt-2 mb-8 flex flex-wrap justify-around">
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/plumbing">
                    <img src="{{ url('img/plumber.png') }}" alt="Image 1" class="w-48 h-16 hover:zoom-in">
                </a>
            </div>
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/matressClean">
                    <img src="{{ url('img/matress.png') }}" alt="Image 2" class="w-52 h-20 hover:zoom-in">
                </a>
            </div>
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/electric">
                    <img src="{{ url('img/daylight.png') }}" alt="Image 3" class="w-48 h-16 hover:zoom-in">
                </a>
            </div>
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/handyman">
                    <img src="{{ url('img/handy.png') }}" alt="Image 4" class="w-54 h-16 hover:zoom-in">
                </a>
            </div>
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/waterHeater">
                    <img src="{{ url('img/water.png') }}" alt="Image 5" class="w-48 h-16 hover:zoom-in">
                </a>
            </div>
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/sofaClean">
                    <img src="{{ url('img/sofa.png') }}" alt="Image 6" class="w-52 h-24 hover:zoom-in">
                </a>
            </div>
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/floorclean">
                    <img src="{{ url('img/floor.png') }}" alt="Image 7" class="w-80 h-20 hover:zoom-in">
                </a>
            </div>
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/rubbishChute">
                    <img src="{{ url('img/rubbish.png') }}" alt="Image 8" class="w-56 h-20 hover:zoom-in">
                </a>
            </div>
        </div>
    </section>


    <footer class="footer-bg text-white py-10">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h2 class="text-xl font-bold mb-4 footer-text-yellow border-b-2 border-yellow-500">About Allhouseworks Services</h2>
                <p style="font-family: system-ui;font-size: inherit;line-height: 20px;">Allhouseworks stands as Singapore’s top choice for Home Maintenance, providing top-quality services such as Handyman, Electrical, Plumbing, and Aircon Servicing. With our easy online booking, you can connect with us via WhatsApp and let our dedicated 4-star customer service team handle everything for you. Thousands of satisfied customers rely on us for fast, transparent quotes and reliable service. Reach out on WhatsApp at +65 9658 5757 now for all your home and office maintenance needs!</p>
            </div>
            <div style="margin-left: 58px;">
                <h2 class="text-xl font-bold mb-4 footer-text-yellow ">Useful Links</h2>
                <ul class="space-y-2" style="line-height: 25px;font-size: medium;">
                    <li><a href="/" class="hover:underline">Home</a></li>
                    <li><a href="/about" class="hover:underline">About Us</a></li>
                    <li><a href="/review" class="hover:underline">Review</a></li>
                    <li><a href="/mission" class="hover:underline">Mission</a></li>
                    <li><a href="/service" class="hover:underline">Services</a></li>
                    <li><a href="/works" class="hover:underline">Works</a></li>
                    <li><a href="/contact" class="hover:underline">Contact</a></li>
                    <li><a href="/price" class="hover:underline">Price</a></li>
                </ul>
            </div>
            <div>
                <h2 class="text-xl font-bold mb-4 footer-text-yellow">Opening Hours</h2>
                <ul class="space-y-2 " style="font-size: medium;line-height: 34px;">
                    <li>Monday - 8:00AM to 8:00PM</li>
                    <li>Tuesday - 8:00AM to 8:00PM</li>
                    <li>Wednesday - 8:00AM to 8:00PM</li>
                    <li>Thursday - 8:00AM to 8:00PM</li>
                    <li>Friday - 8:00AM to 6:00PM</li>
                    <li>Saturday - 9:00AM to 6:00PM</li>
                    <li>Sunday - 8:00AM to 8:00PM</li>
                </ul>
            </div>
            <div>
                <h2 class="text-xl font-bold mb-4 footer-text-yellow">Contact Here</h2>
                <ul class="space-y-2" style="font-size: medium;line-height: 28px;">
                    <li><a href="https://www.google.com/maps/search/?api=1&query=1090+Lower+Delta+Road+%2303-07,+Singapore+169201" target="_blank">1090 Lower Delta Road #03-07, Singapore 169201</a></li>
                    <li>WhatsApp (Message Only): <a href="https://wa.me/6596585757" style="color: #F69919;font-weight: 700;">+65 9658 5757</a></li>
                    <li>Email: <a href="mailto:info@allhouseworks.com" style="color: #F69919;font-weight: 700;">info@allhouseworks.com</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <style>
        .footer-bg {
            background-image: linear-gradient(rgb(0 0 0 / 67%), rgb(0 0 0 / 81%)), url(https://img.pikbest.com/origin/09/17/44/54fpIkbEsTrpq.jpg!w700wp);
            background-attachment: fixed;
        }

        .footer-text-yellow {
            color: #f8b500;
        }
    </style>


</body>

</html>
<script>
    let i = 1;

    function nextSlide() {
        if (i == 3) {
            let activeSlide = document.querySelector('.slide.translate-x-0');
            activeSlide.classList.remove('translate-x-0');
            activeSlide.classList.add('translate-x-full');

            let nextSlide = activeSlide.previousElementSibling.previousElementSibling;
            nextSlide.classList.remove('translate-x-full');
            nextSlide.classList.add('translate-x-0');

            i = 1;
        } else {
            i++;

            let activeSlide = document.querySelector('.slide.translate-x-0');
            activeSlide.classList.remove('translate-x-0');
            activeSlide.classList.add('translate-x-full');

            let nextSlide = activeSlide.nextElementSibling;
            nextSlide.classList.remove('translate-x-full');
            nextSlide.classList.add('translate-x-0');
        }

    }

    function previousSlide() {
        if (i == 1) {
            let activeSlide = document.querySelector('.slide.translate-x-0');
            activeSlide.classList.remove('translate-x-0');
            activeSlide.classList.add('translate-x-full');

            let previousSlide = activeSlide.nextElementSibling.nextElementSibling;
            previousSlide.classList.remove('translate-x-full');
            previousSlide.classList.add('translate-x-0');

            i = 3;
        } else {
            i--;

            let activeSlide = document.querySelector('.slide.translate-x-0');
            activeSlide.classList.remove('translate-x-0');
            activeSlide.classList.add('translate-x-full');

            let previousSlide = activeSlide.previousElementSibling;
            previousSlide.classList.remove('translate-x-full');
            previousSlide.classList.add('translate-x-0');
        }
    }
    window.onscroll = function() {
        var navbar = document.getElementById("navbar");
        if (window.pageYOffset > 0) {
            navbar.classList.add("sticky-nav");
            navbar.style.width = "100%";
            navbar.style.position = "fixed";
            navbar.style.top = "0";
            navbar.style.left = "50%";
            navbar.style.transform = "translateX(-50%)";
        } else {
            navbar.classList.remove("sticky-nav");
            navbar.style.width = "80%";
            navbar.style.position = "absolute";
            navbar.style.top = "-656px";

            navbar.style.left = "50%";
            navbar.style.transform = "translateX(-50%)";
        }
    };

    function checkAndRedirect(event) {
        event.preventDefault();
        const input = document.getElementById('search-input').value.toLowerCase().replace(/\s+/g, '');
        const routes = {
            'plumber': '/searchPlumber',
            'electrician': '/searchElectric',
            'handyman': '/searchHandyMan',
            'deepclean': '/searchDeepclean',
            'floorpolish': '/searchFloorPolish',
            'floorclean': '/searchFloorClean',
            'wood': '/searchWood',
            'decking': '/searchDecking'
        };

        let foundRoute = false;

        for (const keyword in routes) {
            if (keyword.includes(input)) {
                window.location.href = routes[keyword];
                foundRoute = true;
                break;
            }
        }

        if (!foundRoute) {
            window.location.href = '/noSearch';
        }
    }

    // Main menu opening
    document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '0';
        overlay.style.display = 'block';
    });

    // Close main menu
    document.getElementById('close-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '-100%';
        overlay.style.display = 'none';
    });

    // Click outside to close menu
    document.getElementById('menu-overlay').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const secondaryMenu = document.getElementById('secondary-menu');
        const secondaryServiceMenu = document.getElementById('secondary-service-menu');
        const plumberMenu = document.getElementById('plumber-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '-100%';
        secondaryMenu.style.left = '-100%';
        secondaryServiceMenu.style.left = '-100%';
        plumberMenu.style.left = '-100%';
        overlay.style.display = 'none';
    });

    // Open secondary menu when clicking "About Us"
    document.getElementById('about-us-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const secondaryMenu = document.getElementById('secondary-menu');
        menu.style.left = '-100%';
        secondaryMenu.style.left = '0';
    });

    // Return to main menu from secondary menu
    document.getElementById('return-main-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const secondaryMenu = document.getElementById('secondary-menu');
        secondaryMenu.style.left = '-100%';
        menu.style.left = '0';
    });

    // Open service submenu when clicking "Service"
    document.getElementById('service-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const secondaryServiceMenu = document.getElementById('secondary-service-menu');
        menu.style.left = '-100%';
        secondaryServiceMenu.style.left = '0';
    });

    // Return to main menu from service submenu
    document.getElementById('return-service-main-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const secondaryServiceMenu = document.getElementById('secondary-service-menu');
        secondaryServiceMenu.style.left = '-100%';
        menu.style.left = '0';
    });

    // Open plumber menu when clicking "Plumber"
    document.getElementById('plumber-btn').addEventListener('click', function() {
        const secondaryServiceMenu = document.getElementById('secondary-service-menu');
        const plumberMenu = document.getElementById('plumber-menu');
        secondaryServiceMenu.style.left = '-100%';
        plumberMenu.style.left = '0';
    });

    // Return to service submenu from plumber menu
    document.getElementById('return-plumber-menu').addEventListener('click', function() {
        const secondaryServiceMenu = document.getElementById('secondary-service-menu');
        const plumberMenu = document.getElementById('plumber-menu');
        plumberMenu.style.left = '-100%';
        secondaryServiceMenu.style.left = '0';
    });
    // Open submenu 222 when clicking "222"
    document.querySelector('#plumber-menu .newMb a[href="/about"]').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default link behavior
        const plumberMenu = document.getElementById('plumber-menu');
        const submenu222 = document.getElementById('submenu-222');
        plumberMenu.style.left = '-100%';
        submenu222.style.left = '0';
    });

    // Return to plumber menu from submenu 222
    document.getElementById('return-submenu-222').addEventListener('click', function() {
        const plumberMenu = document.getElementById('plumber-menu');
        const submenu222 = document.getElementById('submenu-222');
        submenu222.style.left = '-100%';
        plumberMenu.style.left = '0';
    });
    // Open submenu Plumbing Choke when clicking "Plumbing Choke"
    document.getElementById('plumbing-choke-btn').addEventListener('click', function() {
        const plumberMenu = document.getElementById('plumber-menu');
        const submenuPlumbingChoke = document.getElementById('submenu-plumbing-choke');
        plumberMenu.style.left = '-100%';
        submenuPlumbingChoke.style.left = '0';
    });

    // Return to plumber menu from submenu Plumbing Choke
    document.getElementById('return-plumbing-choke-menu').addEventListener('click', function() {
        const plumberMenu = document.getElementById('plumber-menu');
        const submenuPlumbingChoke = document.getElementById('submenu-plumbing-choke');
        submenuPlumbingChoke.style.left = '-100%';
        plumberMenu.style.left = '0';
    });




    // WhatsApp
    document.getElementById('whatsappImage').addEventListener('click', function() {
        var message = "Good day, I am interested in learning more about your services. Could you please provide me with more information? Thank you.";
        var phoneNumber = "6596585757";
        var whatsappUrl = "https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(message);
        window.open(whatsappUrl, '_blank');
    });
    // Function to hide submenu on mouse leave
    function toggleSubMenu(submenuId) {
        const submenu = document.getElementById(submenuId);
        if (submenu) {
            submenu.classList.toggle('hidden');
        }
    }
    window.addEventListener('scroll', function() {
        var mainNav = document.getElementById('main-nav');
        if (window.scrollY > 0) {
            mainNav.classList.add('scrolled');
        } else {
            mainNav.classList.remove('scrolled');
        }
    });

    function toggleSubMenu(submenuId, arrowId) {
        var submenu = document.getElementById(submenuId);
        var arrow = document.getElementById(arrowId);
        if (submenu.classList.contains('hidden')) {
            submenu.classList.remove('hidden');
            arrow.classList.add('rotate-180');
        } else {
            submenu.classList.add('hidden');
            arrow.classList.remove('rotate-180');
        }
    }
    // Open Water Heater submenu
    document.getElementById('water-heater-btn').addEventListener('click', function() {
        const plumberMenu = document.getElementById('plumber-menu');
        const submenuWaterHeater = document.getElementById('submenu-water-heater');
        plumberMenu.style.left = '-100%';
        submenuWaterHeater.style.left = '0';
    });

    // Return to Plumber menu from Water Heater submenu
    document.getElementById('return-water-heater-menu').addEventListener('click', function() {
        const plumberMenu = document.getElementById('plumber-menu');
        const submenuWaterHeater = document.getElementById('submenu-water-heater');
        submenuWaterHeater.style.left = '-100%';
        plumberMenu.style.left = '0';
    });
    // Open Toilet Bowl submenu
    document.getElementById('toilet-bowl-btn').addEventListener('click', function() {
        const plumberMenu = document.getElementById('plumber-menu');
        const submenuToiletBowl = document.getElementById('submenu-toilet-bowl');
        plumberMenu.style.left = '-100%';
        submenuToiletBowl.style.left = '0';
    });

    // Return to Plumber menu from Toilet Bowl submenu
    document.getElementById('return-toilet-bowl-menu').addEventListener('click', function() {
        const plumberMenu = document.getElementById('plumber-menu');
        const submenuToiletBowl = document.getElementById('submenu-toilet-bowl');
        submenuToiletBowl.style.left = '-100%';
        plumberMenu.style.left = '0';
    });
    // Open Shower Service submenu
    document.getElementById('shower-service-btn').addEventListener('click', function() {
        const plumberMenu = document.getElementById('plumber-menu');
        const submenuShowerService = document.getElementById('submenu-shower-service');
        plumberMenu.style.left = '-100%';
        submenuShowerService.style.left = '0';
    });

    // Return to Plumber menu from Shower Service submenu
    document.getElementById('return-shower-service-menu').addEventListener('click', function() {
        const plumberMenu = document.getElementById('plumber-menu');
        const submenuShowerService = document.getElementById('submenu-shower-service');
        submenuShowerService.style.left = '-100%';
        plumberMenu.style.left = '0';
    });
    // Open Electrician submenu when clicking "Electrician"
    document.getElementById('electrician-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const electricianMenu = document.getElementById('electrician-menu');
        menu.style.left = '-100%';
        electricianMenu.style.left = '0';
    });

    // Return to main menu from Electrician submenu
    document.getElementById('return-electrician-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const electricianMenu = document.getElementById('electrician-menu');
        electricianMenu.style.left = '-100%';
        menu.style.left = '0';
    });

    // Click outside to close Electrician submenu
    document.getElementById('menu-overlay').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const electricianMenu = document.getElementById('electrician-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '-100%';
        electricianMenu.style.left = '-100%';
        overlay.style.display = 'none';
    });
    // Open Light Service submenu when clicking "Light Service"
    document.getElementById('light-service-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const lightServiceMenu = document.getElementById('light-service-menu');
        menu.style.left = '-100%';
        lightServiceMenu.style.left = '0';
    });

    // Return to main menu from Light Service submenu
    document.getElementById('return-light-service-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const lightServiceMenu = document.getElementById('light-service-menu');
        lightServiceMenu.style.left = '-100%';
        menu.style.left = '0';
    });

    // Click outside to close Light Service submenu
    document.getElementById('menu-overlay').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const lightServiceMenu = document.getElementById('light-service-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '-100%';
        lightServiceMenu.style.left = '-100%';
        overlay.style.display = 'none';
    });
    // Open Handyman submenu when clicking "Handyman"
    document.getElementById('handyman-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const handymanMenu = document.getElementById('handyman-menu');
        menu.style.left = '-100%';
        handymanMenu.style.left = '0';
    });

    // Return to main menu from Handyman submenu
    document.getElementById('return-handyman-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const handymanMenu = document.getElementById('handyman-menu');
        handymanMenu.style.left = '-100%';
        menu.style.left = '0';
    });

    // Click outside to close Handyman submenu
    document.getElementById('menu-overlay').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const handymanMenu = document.getElementById('handyman-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '-100%';
        handymanMenu.style.left = '-100%';
        overlay.style.display = 'none';
    });
    // Open Deep Cleaning submenu when clicking "Deep Cleaning"
    document.getElementById('deepclean-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const deepcleanMenu = document.getElementById('deepclean-menu');
        menu.style.left = '-100%';
        deepcleanMenu.style.left = '0';
    });

    // Return to main menu from Deep Cleaning submenu
    document.getElementById('return-deepclean-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const deepcleanMenu = document.getElementById('deepclean-menu');
        deepcleanMenu.style.left = '-100%';
        menu.style.left = '0';
    });

    // Click outside to close Deep Cleaning submenu
    document.getElementById('menu-overlay').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const deepcleanMenu = document.getElementById('deepclean-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '-100%';
        deepcleanMenu.style.left = '-100%';
        overlay.style.display = 'none';
    });
    // Open Floor Polishing submenu when clicking "Floor Polishing"
    document.getElementById('floor-polishing-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const floorPolishingMenu = document.getElementById('floor-polishing-menu');
        menu.style.left = '-100%';
        floorPolishingMenu.style.left = '0';
    });

    // Return to main menu from Floor Polishing submenu
    document.getElementById('return-floor-polishing-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const floorPolishingMenu = document.getElementById('floor-polishing-menu');
        floorPolishingMenu.style.left = '-100%';
        menu.style.left = '0';
    });

    // Click outside to close Floor Polishing submenu
    document.getElementById('menu-overlay').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const floorPolishingMenu = document.getElementById('floor-polishing-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '-100%';
        floorPolishingMenu.style.left = '-100%';
        overlay.style.display = 'none';
    });
    // Open Floor Cleaning submenu when clicking "Floor Cleaning"
    document.getElementById('floor-cleaning-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const floorCleaningMenu = document.getElementById('floor-cleaning-menu');
        menu.style.left = '-100%';
        floorCleaningMenu.style.left = '0';
    });

    // Return to main menu from Floor Cleaning submenu
    document.getElementById('return-floor-cleaning-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const floorCleaningMenu = document.getElementById('floor-cleaning-menu');
        floorCleaningMenu.style.left = '-100%';
        menu.style.left = '0';
    });

    // Click outside to close Floor Cleaning submenu
    document.getElementById('menu-overlay').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const floorCleaningMenu = document.getElementById('floor-cleaning-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '-100%';
        floorCleaningMenu.style.left = '-100%';
        overlay.style.display = 'none';
    });
    // Open Wood Varnishing submenu when clicking "Wood Varnishing"
    document.getElementById('wood-varnishing-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const woodVarnishingMenu = document.getElementById('wood-varnishing-menu');
        menu.style.left = '-100%';
        woodVarnishingMenu.style.left = '0';
    });

    // Return to main menu from Wood Varnishing submenu
    document.getElementById('return-wood-varnishing-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const woodVarnishingMenu = document.getElementById('wood-varnishing-menu');
        woodVarnishingMenu.style.left = '-100%';
        menu.style.left = '0';
    });

    // Click outside to close Wood Varnishing submenu
    document.getElementById('menu-overlay').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const woodVarnishingMenu = document.getElementById('wood-varnishing-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '-100%';
        woodVarnishingMenu.style.left = '-100%';
        overlay.style.display = 'none';
    });
    // Open Decking submenu when clicking "Decking"
    document.getElementById('decking-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const deckingMenu = document.getElementById('decking-menu');
        menu.style.left = '-100%';
        deckingMenu.style.left = '0';
    });

    // Return to main menu from Decking submenu
    document.getElementById('return-decking-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const deckingMenu = document.getElementById('decking-menu');
        deckingMenu.style.left = '-100%';
        menu.style.left = '0';
    });

    // Click outside to close Decking submenu
    document.getElementById('menu-overlay').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const deckingMenu = document.getElementById('decking-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '-100%';
        deckingMenu.style.left = '-100%';
        overlay.style.display = 'none';
    });
</script>