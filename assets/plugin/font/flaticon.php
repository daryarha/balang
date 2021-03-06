<?php header("content-type: text/css"); ?>
@font-face {
  font-family: "Flaticon";
  src: url('<?=base_url()?>'assets/plugin/font/Flaticon.eot);
  src: url("<?=base_url();?>"assets/plugin/font/Flaticon.eot?#iefix) format("embedded-opentype"),
       url("<?=base_url();?>"assets/plugin/font/Flaticon.woff) format("woff"),
       url("<?=base_url();?>"assets/plugin/font/Flaticon.ttf) format("truetype"),
       url("<?=base_url();?>"assets/plugin/font/Flaticon.svg#Flaticon) format("svg");
  font-weight: normal;
  font-style: normal;
}

@media screen and (-webkit-min-device-pixel-ratio:0) {
  @font-face {
    font-family: "Flaticon";
    src: url("<?=base_url();?>"assets/plugin/font/Flaticon.svg#Flaticon) format("svg");
  }
}

[class^="flaticon-"]:before, [class*=" flaticon-"]:before,
[class^="flaticon-"]:after, [class*=" flaticon-"]:after {   
  font-family: Flaticon;
font-style: normal;
}

.flaticon-agenda:before { content: "\f100"; }
.flaticon-money:before { content: "\f101"; }
.flaticon-interface-1:before { content: "\f102"; }
.flaticon-interface-2:before { content: "\f103"; }
.flaticon-interface:before { content: "\f104"; }
.flaticon-technology:before { content: "\f105"; }
.flaticon-clock:before { content: "\f106"; }
.flaticon-car:before { content: "\f107"; }
.flaticon-tool:before { content: "\f108"; }
.flaticon-security:before { content: "\f109"; }
.flaticon-key:before { content: "\f10a"; }
.flaticon-jacket:before { content: "\f10b"; }
.flaticon-hooded-jacket:before { content: "\f10c"; }



    .glyph-icon {
        font-family:"Flaticon";
    }
    .glyph-icon:before {
        font-size: 150px;
        color: #222;
        color: #117DC8;
    }