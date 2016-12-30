<?php
add_action( 'admin_menu', 'fa_dashicons_add_admin_menu' );
add_action( 'admin_init', 'fa_dashicons_settings_init' );


function fa_dashicons_add_admin_menu(  ) { 

	add_options_page( 'FontAwesome Dashicons', 'FontAwesome Dashicons', 'manage_options', 'fontawesome_dashicons', 'fa_dashicons_options_page' );

}


function fa_dashicons_settings_init(  ) { 

	register_setting( 'faDashicons', 'fa_dashicons_settings' );

	add_settings_section(
		'fa_dashicons_faDashicons_section', 
		__( 'Mapping Codes', 'fa-dashicons' ), 
		'fa_dashicons_settings_section_callback', 
		'faDashicons'
	);

	add_settings_field( 
		'fa_dashicons_text_field_0', 
		__( '', 'fa-dashicons' ), 
		'fa_dashicons_text_field_0_render', 
		'faDashicons', 
		'fa_dashicons_faDashicons_section' 
	);


}


function fa_dashicons_text_field_0_render(  ) { 

	$options = get_option( 'fa_dashicons_settings' );
	?>
    <style type="text/css">
        .form-table th {
            display: none;
        }
        .glyphs.character-mapping {
            margin: 0 0 20px 0;
            padding: 20px 0 20px 30px;
            color: rgba(0, 0, 0, 0.5);
            border: 1px solid #d8e0e5;
            -webkit-border-radius: 3px;
            border-radius: 3px;
        }
        .glyphs.character-mapping li {
            margin: 0 30px 20px 0;
            display: inline-block;
            width: 90px
        }
        .glyphs.character-mapping .icon {
            margin: 10px 0 10px 15px;
            padding: 15px;
            position: relative;
            width: 55px;
            height: 55px;
            color: #162a36 !important;
            overflow: hidden;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            font-size: 32px;
        }
        .glyphs.character-mapping .icon svg {
            fill: #000
        }
        .glyphs.character-mapping input {
            margin: 0;
            padding: 5px 0;
            line-height: 12px;
            font-size: 12px;
            display: block;
            width: 100%;
            border: 1px solid #d8e0e5;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            text-align: center;
            outline: 0;
        }
        .glyphs.character-mapping input:focus {
            border: 1px solid #fbde4a;
            -webkit-box-shadow: inset 0 0 3px #fbde4a;
            box-shadow: inset 0 0 3px #fbde4a
        }
        .glyphs.character-mapping input:hover {
            -webkit-box-shadow: inset 0 0 3px #fbde4a;
            box-shadow: inset 0 0 3px #fbde4a
        }
        .glyphs.css-mapping {
            margin: 0 0 60px 0;
            padding: 30px 0 20px 30px;
            color: rgba(0, 0, 0, 0.5);
            border: 1px solid #d8e0e5;
            -webkit-border-radius: 3px;
            border-radius: 3px;
        }
        .glyphs.css-mapping li {
            margin: 0 30px 20px 0;
            padding: 0;
            display: inline-block;
            overflow: hidden
        }
        .glyphs.css-mapping .icon {
            margin: 0;
            margin-right: 10px;
            padding: 13px;
            height: 50px;
            width: 50px;
            color: #162a36 !important;
            overflow: hidden;
            float: left;
            font-size: 24px
        }
        .glyphs.css-mapping input {
            margin: 0;
            margin-top: 5px;
            padding: 8px;
            line-height: 16px;
            font-size: 16px;
            display: block;
            width: 150px;
            height: 40px;
            border: 1px solid #d8e0e5;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            background: #fff;
            outline: 0;
            float: right;
        }
        .glyphs.css-mapping input:focus {
            border: 1px solid #fbde4a;
            -webkit-box-shadow: inset 0 0 3px #fbde4a;
            box-shadow: inset 0 0 3px #fbde4a
        }
        .glyphs.css-mapping input:hover {
            -webkit-box-shadow: inset 0 0 3px #fbde4a;
            box-shadow: inset 0 0 3px #fbde4a
        }
    </style>
  
    <div class="container">
      <ul class="glyphs css-mapping">
        <li>
          <div class="icon dashicons-fa-500px"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-500px">
        </li>
        <li>
          <div class="icon dashicons-fa-adjust"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-adjust">
        </li>
        <li>
          <div class="icon dashicons-fa-adn"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-adn">
        </li>
        <li>
          <div class="icon dashicons-fa-align-justify"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-align-justify">
        </li>
        <li>
          <div class="icon dashicons-fa-align-center"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-align-center">
        </li>
        <li>
          <div class="icon dashicons-fa-align-left"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-align-left">
        </li>
        <li>
          <div class="icon dashicons-fa-align-right"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-align-right">
        </li>
        <li>
          <div class="icon dashicons-fa-amazon"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-amazon">
        </li>
        <li>
          <div class="icon dashicons-fa-ambulance"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-ambulance">
        </li>
        <li>
          <div class="icon dashicons-fa-anchor"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-anchor">
        </li>
        <li>
          <div class="icon dashicons-fa-android"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-android">
        </li>
        <li>
          <div class="icon dashicons-fa-angellist"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-angellist">
        </li>
        <li>
          <div class="icon dashicons-fa-angle-double-down"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-angle-double-down">
        </li>
        <li>
          <div class="icon dashicons-fa-angle-double-left"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-angle-double-left">
        </li>
        <li>
          <div class="icon dashicons-fa-angle-double-right"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-angle-double-right">
        </li>
        <li>
          <div class="icon dashicons-fa-angle-double-up"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-angle-double-up">
        </li>
        <li>
          <div class="icon dashicons-fa-angle-down"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-angle-down">
        </li>
        <li>
          <div class="icon dashicons-fa-angle-left"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-angle-left">
        </li>
        <li>
          <div class="icon dashicons-fa-angle-right"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-angle-right">
        </li>
        <li>
          <div class="icon dashicons-fa-angle-up"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-angle-up">
        </li>
        <li>
          <div class="icon dashicons-fa-apple"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-apple">
        </li>
        <li>
          <div class="icon dashicons-fa-archive"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-archive">
        </li>
        <li>
          <div class="icon dashicons-fa-area-chart"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-area-chart">
        </li>
        <li>
          <div class="icon dashicons-fa-arrow-circle-down"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-arrow-circle-down">
        </li>
        <li>
          <div class="icon dashicons-fa-arrow-circle-left"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-arrow-circle-left">
        </li>
        <li>
          <div class="icon dashicons-fa-arrow-circle-o-down"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-arrow-circle-o-down">
        </li>
        <li>
          <div class="icon dashicons-fa-arrows-v"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-arrows-v">
        </li>
        <li>
          <div class="icon dashicons-fa-arrows-h"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-arrows-h">
        </li>
        <li>
          <div class="icon dashicons-fa-arrows-alt"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-arrows-alt">
        </li>
        <li>
          <div class="icon dashicons-fa-arrows"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-arrows">
        </li>
        <li>
          <div class="icon dashicons-fa-arrow-up"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-arrow-up">
        </li>
        <li>
          <div class="icon dashicons-fa-arrow-right"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-arrow-right">
        </li>
        <li>
          <div class="icon dashicons-fa-arrow-left"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-arrow-left">
        </li>
        <li>
          <div class="icon dashicons-fa-arrow-down"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-arrow-down">
        </li>
        <li>
          <div class="icon dashicons-fa-arrow-circle-up"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-arrow-circle-up">
        </li>
        <li>
          <div class="icon dashicons-fa-arrow-circle-right"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-arrow-circle-right">
        </li>
        <li>
          <div class="icon dashicons-fa-arrow-circle-o-up"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-arrow-circle-o-up">
        </li>
        <li>
          <div class="icon dashicons-fa-arrow-circle-o-right"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-arrow-circle-o-right">
        </li>
        <li>
          <div class="icon dashicons-fa-arrow-circle-o-left"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-arrow-circle-o-left">
        </li>
        <li>
          <div class="icon dashicons-fa-asterisk"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-asterisk">
        </li>
        <li>
          <div class="icon dashicons-fa-at"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-at">
        </li>
        <li>
          <div class="icon dashicons-fa-backward"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-backward">
        </li>
        <li>
          <div class="icon dashicons-fa-balance-scale"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-balance-scale">
        </li>
        <li>
          <div class="icon dashicons-fa-ban"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-ban">
        </li>
        <li>
          <div class="icon dashicons-fa-black-tie"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-black-tie">
        </li>
        <li>
          <div class="icon dashicons-fa-bold"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-bold">
        </li>
        <li>
          <div class="icon dashicons-fa-bomb"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-bomb">
        </li>
        <li>
          <div class="icon dashicons-fa-bolt"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-bolt">
        </li>
        <li>
          <div class="icon dashicons-fa-bullseye"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-bullseye">
        </li>
        <li>
          <div class="icon dashicons-fa-bus"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-bus">
        </li>
        <li>
          <div class="icon dashicons-fa-buysellads"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-buysellads">
        </li>
        <li>
          <div class="icon dashicons-fa-calculator"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-calculator">
        </li>
        <li>
          <div class="icon dashicons-fa-calendar"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-calendar">
        </li>
        <li>
          <div class="icon dashicons-fa-calendar-check-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-calendar-check-o">
        </li>
        <li>
          <div class="icon dashicons-fa-calendar-minus-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-calendar-minus-o">
        </li>
        <li>
          <div class="icon dashicons-fa-calendar-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-calendar-o">
        </li>
        <li>
          <div class="icon dashicons-fa-calendar-plus-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-calendar-plus-o">
        </li>
        <li>
          <div class="icon dashicons-fa-btc"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-btc">
        </li>
        <li>
          <div class="icon dashicons-fa-calendar-times-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-calendar-times-o">
        </li>
        <li>
          <div class="icon dashicons-fa-camera"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-camera">
        </li>
        <li>
          <div class="icon dashicons-fa-camera-retro"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-camera-retro">
        </li>
        <li>
          <div class="icon dashicons-fa-car"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-car">
        </li>
        <li>
          <div class="icon dashicons-fa-caret-down"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-caret-down">
        </li>
        <li>
          <div class="icon dashicons-fa-caret-left"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-caret-left">
        </li>
        <li>
          <div class="icon dashicons-fa-caret-right"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-caret-right">
        </li>
        <li>
          <div class="icon dashicons-fa-caret-square-o-down"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-caret-square-o-down">
        </li>
        <li>
          <div class="icon dashicons-fa-caret-square-o-left"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-caret-square-o-left">
        </li>
        <li>
          <div class="icon dashicons-fa-caret-square-o-right"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-caret-square-o-right">
        </li>
        <li>
          <div class="icon dashicons-fa-caret-square-o-up"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-caret-square-o-up">
        </li>
        <li>
          <div class="icon dashicons-fa-caret-up"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-caret-up">
        </li>
        <li>
          <div class="icon dashicons-fa-cart-arrow-down"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-cart-arrow-down">
        </li>
        <li>
          <div class="icon dashicons-fa-cart-plus"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-cart-plus">
        </li>
        <li>
          <div class="icon dashicons-fa-cc"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-cc">
        </li>
        <li>
          <div class="icon dashicons-fa-cc-amex"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-cc-amex">
        </li>
        <li>
          <div class="icon dashicons-fa-cc-diners-club"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-cc-diners-club">
        </li>
        <li>
          <div class="icon dashicons-fa-check-square-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-check-square-o">
        </li>
        <li>
          <div class="icon dashicons-fa-check-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-check-square">
        </li>
        <li>
          <div class="icon dashicons-fa-check-circle-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-check-circle-o">
        </li>
        <li>
          <div class="icon dashicons-fa-check-circle"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-check-circle">
        </li>
        <li>
          <div class="icon dashicons-fa-check"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-check">
        </li>
        <li>
          <div class="icon dashicons-fa-chain-broken"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-chain-broken">
        </li>
        <li>
          <div class="icon dashicons-fa-certificate"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-certificate">
        </li>
        <li>
          <div class="icon dashicons-fa-cc-visa"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-cc-visa">
        </li>
        <li>
          <div class="icon dashicons-fa-cc-stripe"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-cc-stripe">
        </li>
        <li>
          <div class="icon dashicons-fa-cc-paypal"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-cc-paypal">
        </li>
        <li>
          <div class="icon dashicons-fa-cc-mastercard"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-cc-mastercard">
        </li>
        <li>
          <div class="icon dashicons-fa-cc-jcb"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-cc-jcb">
        </li>
        <li>
          <div class="icon dashicons-fa-cc-discover"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-cc-discover">
        </li>
        <li>
          <div class="icon dashicons-fa-chevron-circle-down"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-chevron-circle-down">
        </li>
        <li>
          <div class="icon dashicons-fa-chevron-circle-left"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-chevron-circle-left">
        </li>
        <li>
          <div class="icon dashicons-fa-chevron-circle-right"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-chevron-circle-right">
        </li>
        <li>
          <div class="icon dashicons-fa-chevron-circle-up"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-chevron-circle-up">
        </li>
        <li>
          <div class="icon dashicons-fa-chevron-down"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-chevron-down">
        </li>
        <li>
          <div class="icon dashicons-fa-chevron-left"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-chevron-left">
        </li>
        <li>
          <div class="icon dashicons-fa-chevron-right"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-chevron-right">
        </li>
        <li>
          <div class="icon dashicons-fa-chevron-up"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-chevron-up">
        </li>
        <li>
          <div class="icon dashicons-fa-child"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-child">
        </li>
        <li>
          <div class="icon dashicons-fa-chrome"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-chrome">
        </li>
        <li>
          <div class="icon dashicons-fa-circle"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-circle">
        </li>
        <li>
          <div class="icon dashicons-fa-circle-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-circle-o">
        </li>
        <li>
          <div class="icon dashicons-fa-circle-o-notch"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-circle-o-notch">
        </li>
        <li>
          <div class="icon dashicons-fa-cogs"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-cogs">
        </li>
        <li>
          <div class="icon dashicons-fa-cog"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-cog">
        </li>
        <li>
          <div class="icon dashicons-fa-coffee"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-coffee">
        </li>
        <li>
          <div class="icon dashicons-fa-codepen"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-codepen">
        </li>
        <li>
          <div class="icon dashicons-fa-connectdevelop"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-connectdevelop">
        </li>
        <li>
          <div class="icon dashicons-fa-code-fork"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-code-fork">
        </li>
        <li>
          <div class="icon dashicons-fa-code"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-code">
        </li>
        <li>
          <div class="icon dashicons-fa-cloud-upload"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-cloud-upload">
        </li>
        <li>
          <div class="icon dashicons-fa-cloud-download"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-cloud-download">
        </li>
        <li>
          <div class="icon dashicons-fa-cloud"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-cloud">
        </li>
        <li>
          <div class="icon dashicons-fa-clone"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-clone">
        </li>
        <li>
          <div class="icon dashicons-fa-clock-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-clock-o">
        </li>
        <li>
          <div class="icon dashicons-fa-clipboard"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-clipboard">
        </li>
        <li>
          <div class="icon dashicons-fa-circle-thin"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-circle-thin">
        </li>
        <li>
          <div class="icon dashicons-fa-columns"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-columns">
        </li>
        <li>
          <div class="icon dashicons-fa-comment"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-comment">
        </li>
        <li>
          <div class="icon dashicons-fa-comment-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-comment-o">
        </li>
        <li>
          <div class="icon dashicons-fa-commenting"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-commenting">
        </li>
        <li>
          <div class="icon dashicons-fa-commenting-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-commenting-o">
        </li>
        <li>
          <div class="icon dashicons-fa-comments"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-comments">
        </li>
        <li>
          <div class="icon dashicons-fa-comments-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-comments-o">
        </li>
        <li>
          <div class="icon dashicons-fa-compass"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-compass">
        </li>
        <li>
          <div class="icon dashicons-fa-compress"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-compress">
        </li>
        <li>
          <div class="icon dashicons-fa-contao"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-contao">
        </li>
        <li>
          <div class="icon dashicons-fa-copyright"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-copyright">
        </li>
        <li>
          <div class="icon dashicons-fa-creative-commons"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-creative-commons">
        </li>
        <li>
          <div class="icon dashicons-fa-diamond"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-diamond">
        </li>
        <li>
          <div class="icon dashicons-fa-deviantart"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-deviantart">
        </li>
        <li>
          <div class="icon dashicons-fa-desktop"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-desktop">
        </li>
        <li>
          <div class="icon dashicons-fa-delicious"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-delicious">
        </li>
        <li>
          <div class="icon dashicons-fa-database"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-database">
        </li>
        <li>
          <div class="icon dashicons-fa-dashcube"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-dashcube">
        </li>
        <li>
          <div class="icon dashicons-fa-cutlery"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-cutlery">
        </li>
        <li>
          <div class="icon dashicons-fa-cubes"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-cubes">
        </li>
        <li>
          <div class="icon dashicons-fa-cube"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-cube">
        </li>
        <li>
          <div class="icon dashicons-fa-css3"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-css3">
        </li>
        <li>
          <div class="icon dashicons-fa-crosshairs"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-crosshairs">
        </li>
        <li>
          <div class="icon dashicons-fa-crop"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-crop">
        </li>
        <li>
          <div class="icon dashicons-fa-credit-card"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-credit-card">
        </li>
        <li>
          <div class="icon dashicons-fa-dot-circle-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-dot-circle-o">
        </li>
        <li>
          <div class="icon dashicons-fa-download"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-download">
        </li>
        <li>
          <div class="icon dashicons-fa-dribbble"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-dribbble">
        </li>
        <li>
          <div class="icon dashicons-fa-digg"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-digg">
        </li>
        <li>
          <div class="icon dashicons-fa-dropbox"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-dropbox">
        </li>
        <li>
          <div class="icon dashicons-fa-drupal"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-drupal">
        </li>
        <li>
          <div class="icon dashicons-fa-eject"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-eject">
        </li>
        <li>
          <div class="icon dashicons-fa-ellipsis-h"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-ellipsis-h">
        </li>
        <li>
          <div class="icon dashicons-fa-ellipsis-v"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-ellipsis-v">
        </li>
        <li>
          <div class="icon dashicons-fa-empire"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-empire">
        </li>
        <li>
          <div class="icon dashicons-fa-envelope"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-envelope">
        </li>
        <li>
          <div class="icon dashicons-fa-envelope-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-envelope-o">
        </li>
        <li>
          <div class="icon dashicons-fa-envelope-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-envelope-square">
        </li>
        <li>
          <div class="icon dashicons-fa-eyedropper"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-eyedropper">
        </li>
        <li>
          <div class="icon dashicons-fa-eye-slash"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-eye-slash">
        </li>
        <li>
          <div class="icon dashicons-fa-eye"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-eye">
        </li>
        <li>
          <div class="icon dashicons-fa-external-link-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-external-link-square">
        </li>
        <li>
          <div class="icon dashicons-fa-external-link"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-external-link">
        </li>
        <li>
          <div class="icon dashicons-fa-expeditedssl"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-expeditedssl">
        </li>
        <li>
          <div class="icon dashicons-fa-expand"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-expand">
        </li>
        <li>
          <div class="icon dashicons-fa-exclamation-triangle"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-exclamation-triangle">
        </li>
        <li>
          <div class="icon dashicons-fa-exclamation-circle"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-exclamation-circle">
        </li>
        <li>
          <div class="icon dashicons-fa-exclamation"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-exclamation">
        </li>
        <li>
          <div class="icon dashicons-fa-exchange"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-exchange">
        </li>
        <li>
          <div class="icon dashicons-fa-eur"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-eur">
        </li>
        <li>
          <div class="icon dashicons-fa-eraser"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-eraser">
        </li>
        <li>
          <div class="icon dashicons-fa-facebook"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-facebook">
        </li>
        <li>
          <div class="icon dashicons-fa-facebook-official"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-facebook-official">
        </li>
        <li>
          <div class="icon dashicons-fa-file-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-file-o">
        </li>
        <li>
          <div class="icon dashicons-fa-file-pdf-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-file-pdf-o">
        </li>
        <li>
          <div class="icon dashicons-fa-facebook-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-facebook-square">
        </li>
        <li>
          <div class="icon dashicons-fa-fast-backward"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-fast-backward">
        </li>
        <li>
          <div class="icon dashicons-fa-fast-forward"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-fast-forward">
        </li>
        <li>
          <div class="icon dashicons-fa-fax"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-fax">
        </li>
        <li>
          <div class="icon dashicons-fa-female"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-female">
        </li>
        <li>
          <div class="icon dashicons-fa-fighter-jet"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-fighter-jet">
        </li>
        <li>
          <div class="icon dashicons-fa-file"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-file">
        </li>
        <li>
          <div class="icon dashicons-fa-file-archive-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-file-archive-o">
        </li>
        <li>
          <div class="icon dashicons-fa-file-audio-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-file-audio-o">
        </li>
        <li>
          <div class="icon dashicons-fa-file-code-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-file-code-o">
        </li>
        <li>
          <div class="icon dashicons-fa-file-excel-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-file-excel-o">
        </li>
        <li>
          <div class="icon dashicons-fa-fire-extinguisher"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-fire-extinguisher">
        </li>
        <li>
          <div class="icon dashicons-fa-fire"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-fire">
        </li>
        <li>
          <div class="icon dashicons-fa-filter"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-filter">
        </li>
        <li>
          <div class="icon dashicons-fa-film"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-film">
        </li>
        <li>
          <div class="icon dashicons-fa-files-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-files-o">
        </li>
        <li>
          <div class="icon dashicons-fa-file-word-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-file-word-o">
        </li>
        <li>
          <div class="icon dashicons-fa-file-video-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-file-video-o">
        </li>
        <li>
          <div class="icon dashicons-fa-file-text-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-file-text-o">
        </li>
        <li>
          <div class="icon dashicons-fa-file-text"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-file-text">
        </li>
        <li>
          <div class="icon dashicons-fa-file-powerpoint-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-file-powerpoint-o">
        </li>
        <li>
          <div class="icon dashicons-fa-file-image-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-file-image-o">
        </li>
        <li>
          <div class="icon dashicons-fa-firefox"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-firefox">
        </li>
        <li>
          <div class="icon dashicons-fa-flag"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-flag">
        </li>
        <li>
          <div class="icon dashicons-fa-flag-checkered"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-flag-checkered">
        </li>
        <li>
          <div class="icon dashicons-fa-flag-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-flag-o">
        </li>
        <li>
          <div class="icon dashicons-fa-flask"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-flask">
        </li>
        <li>
          <div class="icon dashicons-fa-flickr"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-flickr">
        </li>
        <li>
          <div class="icon dashicons-fa-floppy-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-floppy-o">
        </li>
        <li>
          <div class="icon dashicons-fa-folder"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-folder">
        </li>
        <li>
          <div class="icon dashicons-fa-folder-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-folder-o">
        </li>
        <li>
          <div class="icon dashicons-fa-folder-open"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-folder-open">
        </li>
        <li>
          <div class="icon dashicons-fa-folder-open-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-folder-open-o">
        </li>
        <li>
          <div class="icon dashicons-fa-font"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-font">
        </li>
        <li>
          <div class="icon dashicons-fa-fonticons"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-fonticons">
        </li>
        <li>
          <div class="icon dashicons-fa-gift"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-gift">
        </li>
        <li>
          <div class="icon dashicons-fa-gg-circle"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-gg-circle">
        </li>
        <li>
          <div class="icon dashicons-fa-gg"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-gg">
        </li>
        <li>
          <div class="icon dashicons-fa-get-pocket"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-get-pocket">
        </li>
        <li>
          <div class="icon dashicons-fa-genderless"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-genderless">
        </li>
        <li>
          <div class="icon dashicons-fa-gbp"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-gbp">
        </li>
        <li>
          <div class="icon dashicons-fa-gavel"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-gavel">
        </li>
        <li>
          <div class="icon dashicons-fa-gamepad"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-gamepad">
        </li>
        <li>
          <div class="icon dashicons-fa-futbol-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-futbol-o">
        </li>
        <li>
          <div class="icon dashicons-fa-frown-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-frown-o">
        </li>
        <li>
          <div class="icon dashicons-fa-foursquare"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-foursquare">
        </li>
        <li>
          <div class="icon dashicons-fa-forward"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-forward">
        </li>
        <li>
          <div class="icon dashicons-fa-forumbee"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-forumbee">
        </li>
        <li>
          <div class="icon dashicons-fa-git"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-git">
        </li>
        <li>
          <div class="icon dashicons-fa-git-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-git-square">
        </li>
        <li>
          <div class="icon dashicons-fa-github-alt"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-github-alt">
        </li>
        <li>
          <div class="icon dashicons-fa-github-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-github-square">
        </li>
        <li>
          <div class="icon dashicons-fa-github"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-github">
        </li>
        <li>
          <div class="icon dashicons-fa-glass"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-glass">
        </li>
        <li>
          <div class="icon dashicons-fa-globe"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-globe">
        </li>
        <li>
          <div class="icon dashicons-fa-google"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-google">
        </li>
        <li>
          <div class="icon dashicons-fa-google-plus"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-google-plus">
        </li>
        <li>
          <div class="icon dashicons-fa-google-plus-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-google-plus-square">
        </li>
        <li>
          <div class="icon dashicons-fa-google-wallet"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-google-wallet">
        </li>
        <li>
          <div class="icon dashicons-fa-graduation-cap"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-graduation-cap">
        </li>
        <li>
          <div class="icon dashicons-fa-gratipay"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-gratipay">
        </li>
        <li>
          <div class="icon dashicons-fa-hand-spock-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-hand-spock-o">
        </li>
        <li>
          <div class="icon dashicons-fa-hand-scissors-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-hand-scissors-o">
        </li>
        <li>
          <div class="icon dashicons-fa-hand-rock-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-hand-rock-o">
        </li>
        <li>
          <div class="icon dashicons-fa-hand-pointer-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-hand-pointer-o">
        </li>
        <li>
          <div class="icon dashicons-fa-hand-peace-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-hand-peace-o">
        </li>
        <li>
          <div class="icon dashicons-fa-hand-paper-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-hand-paper-o">
        </li>
        <li>
          <div class="icon dashicons-fa-hand-o-up"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-hand-o-up">
        </li>
        <li>
          <div class="icon dashicons-fa-hand-o-right"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-hand-o-right">
        </li>
        <li>
          <div class="icon dashicons-fa-hand-o-left"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-hand-o-left">
        </li>
        <li>
          <div class="icon dashicons-fa-hand-o-down"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-hand-o-down">
        </li>
        <li>
          <div class="icon dashicons-fa-hand-lizard-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-hand-lizard-o">
        </li>
        <li>
          <div class="icon dashicons-fa-hacker-news"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-hacker-news">
        </li>
        <li>
          <div class="icon dashicons-fa-h-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-h-square">
        </li>
        <li>
          <div class="icon dashicons-fa-hdd-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-hdd-o">
        </li>
        <li>
          <div class="icon dashicons-fa-header"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-header">
        </li>
        <li>
          <div class="icon dashicons-fa-headphones"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-headphones">
        </li>
        <li>
          <div class="icon dashicons-fa-heart"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-heart">
        </li>
        <li>
          <div class="icon dashicons-fa-heart-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-heart-o">
        </li>
        <li>
          <div class="icon dashicons-fa-heartbeat"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-heartbeat">
        </li>
        <li>
          <div class="icon dashicons-fa-history"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-history">
        </li>
        <li>
          <div class="icon dashicons-fa-home"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-home">
        </li>
        <li>
          <div class="icon dashicons-fa-hospital-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-hospital-o">
        </li>
        <li>
          <div class="icon dashicons-fa-hourglass"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-hourglass">
        </li>
        <li>
          <div class="icon dashicons-fa-hourglass-end"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-hourglass-end">
        </li>
        <li>
          <div class="icon dashicons-fa-hourglass-half"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-hourglass-half">
        </li>
        <li>
          <div class="icon dashicons-fa-hourglass-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-hourglass-o">
        </li>
        <li>
          <div class="icon dashicons-fa-internet-explorer"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-internet-explorer">
        </li>
        <li>
          <div class="icon dashicons-fa-instagram"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-instagram">
        </li>
        <li>
          <div class="icon dashicons-fa-inr"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-inr">
        </li>
        <li>
          <div class="icon dashicons-fa-info-circle"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-info-circle">
        </li>
        <li>
          <div class="icon dashicons-fa-info"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-info">
        </li>
        <li>
          <div class="icon dashicons-fa-industry"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-industry">
        </li>
        <li>
          <div class="icon dashicons-fa-indent"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-indent">
        </li>
        <li>
          <div class="icon dashicons-fa-inbox"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-inbox">
        </li>
        <li>
          <div class="icon dashicons-fa-ils"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-ils">
        </li>
        <li>
          <div class="icon dashicons-fa-i-cursor"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-i-cursor">
        </li>
        <li>
          <div class="icon dashicons-fa-html5"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-html5">
        </li>
        <li>
          <div class="icon dashicons-fa-houzz"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-houzz">
        </li>
        <li>
          <div class="icon dashicons-fa-hourglass-start"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-hourglass-start">
        </li>
        <li>
          <div class="icon dashicons-fa-ioxhost"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-ioxhost">
        </li>
        <li>
          <div class="icon dashicons-fa-italic"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-italic">
        </li>
        <li>
          <div class="icon dashicons-fa-joomla"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-joomla">
        </li>
        <li>
          <div class="icon dashicons-fa-jpy"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-jpy">
        </li>
        <li>
          <div class="icon dashicons-fa-jsfiddle"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-jsfiddle">
        </li>
        <li>
          <div class="icon dashicons-fa-key"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-key">
        </li>
        <li>
          <div class="icon dashicons-fa-keyboard-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-keyboard-o">
        </li>
        <li>
          <div class="icon dashicons-fa-krw"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-krw">
        </li>
        <li>
          <div class="icon dashicons-fa-language"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-language">
        </li>
        <li>
          <div class="icon dashicons-fa-laptop"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-laptop">
        </li>
        <li>
          <div class="icon dashicons-fa-lastfm"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-lastfm">
        </li>
        <li>
          <div class="icon dashicons-fa-lastfm-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-lastfm-square">
        </li>
        <li>
          <div class="icon dashicons-fa-leaf"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-leaf">
        </li>
        <li>
          <div class="icon dashicons-fa-list-alt"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-list-alt">
        </li>
        <li>
          <div class="icon dashicons-fa-list"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-list">
        </li>
        <li>
          <div class="icon dashicons-fa-linux"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-linux">
        </li>
        <li>
          <div class="icon dashicons-fa-linkedin-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-linkedin-square">
        </li>
        <li>
          <div class="icon dashicons-fa-linkedin"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-linkedin">
        </li>
        <li>
          <div class="icon dashicons-fa-link"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-link">
        </li>
        <li>
          <div class="icon dashicons-fa-line-chart"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-line-chart">
        </li>
        <li>
          <div class="icon dashicons-fa-lightbulb-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-lightbulb-o">
        </li>
        <li>
          <div class="icon dashicons-fa-life-ring"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-life-ring">
        </li>
        <li>
          <div class="icon dashicons-fa-level-up"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-level-up">
        </li>
        <li>
          <div class="icon dashicons-fa-level-down"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-level-down">
        </li>
        <li>
          <div class="icon dashicons-fa-lemon-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-lemon-o">
        </li>
        <li>
          <div class="icon dashicons-fa-leanpub"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-leanpub">
        </li>
        <li>
          <div class="icon dashicons-fa-list-ol"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-list-ol">
        </li>
        <li>
          <div class="icon dashicons-fa-map-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-map-o">
        </li>
        <li>
          <div class="icon dashicons-fa-lock"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-lock">
        </li>
        <li>
          <div class="icon dashicons-fa-list-ul"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-list-ul">
        </li>
        <li>
          <div class="icon dashicons-fa-location-arrow"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-location-arrow">
        </li>
        <li>
          <div class="icon dashicons-fa-long-arrow-down"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-long-arrow-down">
        </li>
        <li>
          <div class="icon dashicons-fa-long-arrow-left"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-long-arrow-left">
        </li>
        <li>
          <div class="icon dashicons-fa-long-arrow-right"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-long-arrow-right">
        </li>
        <li>
          <div class="icon dashicons-fa-magic"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-magic">
        </li>
        <li>
          <div class="icon dashicons-fa-long-arrow-up"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-long-arrow-up">
        </li>
        <li>
          <div class="icon dashicons-fa-magnet"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-magnet">
        </li>
        <li>
          <div class="icon dashicons-fa-male"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-male">
        </li>
        <li>
          <div class="icon dashicons-fa-map"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-map">
        </li>
        <li>
          <div class="icon dashicons-fa-map-marker"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-map-marker">
        </li>
        <li>
          <div class="icon dashicons-fa-meh-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-meh-o">
        </li>
        <li>
          <div class="icon dashicons-fa-music"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-music">
        </li>
        <li>
          <div class="icon dashicons-fa-mouse-pointer"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-mouse-pointer">
        </li>
        <li>
          <div class="icon dashicons-fa-pagelines"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-pagelines">
        </li>
        <li>
          <div class="icon dashicons-fa-paint-brush"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-paint-brush">
        </li>
        <li>
          <div class="icon dashicons-fa-outdent"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-outdent">
        </li>
        <li>
          <div class="icon dashicons-fa-optin-monster"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-optin-monster">
        </li>
        <li>
          <div class="icon dashicons-fa-opera"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-opera">
        </li>
        <li>
          <div class="icon dashicons-fa-openid"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-openid">
        </li>
        <li>
          <div class="icon dashicons-fa-opencart"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-opencart">
        </li>
        <li>
          <div class="icon dashicons-fa-odnoklassniki-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-odnoklassniki-square">
        </li>
        <li>
          <div class="icon dashicons-fa-object-ungroup"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-object-ungroup">
        </li>
        <li>
          <div class="icon dashicons-fa-object-group"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-object-group">
        </li>
        <li>
          <div class="icon dashicons-fa-newspaper-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-newspaper-o">
        </li>
        <li>
          <div class="icon dashicons-fa-neuter"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-neuter">
        </li>
        <li>
          <div class="icon dashicons-fa-mercury"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-mercury">
        </li>
        <li>
          <div class="icon dashicons-fa-microphone"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-microphone">
        </li>
        <li>
          <div class="icon dashicons-fa-map-pin"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-map-pin">
        </li>
        <li>
          <div class="icon dashicons-fa-map-signs"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-map-signs">
        </li>
        <li>
          <div class="icon dashicons-fa-mars"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-mars">
        </li>
        <li>
          <div class="icon dashicons-fa-mars-double"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-mars-double">
        </li>
        <li>
          <div class="icon dashicons-fa-mars-stroke"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-mars-stroke">
        </li>
        <li>
          <div class="icon dashicons-fa-mars-stroke-h"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-mars-stroke-h">
        </li>
        <li>
          <div class="icon dashicons-fa-meanpath"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-meanpath">
        </li>
        <li>
          <div class="icon dashicons-fa-maxcdn"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-maxcdn">
        </li>
        <li>
          <div class="icon dashicons-fa-mars-stroke-v"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-mars-stroke-v">
        </li>
        <li>
          <div class="icon dashicons-fa-medium"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-medium">
        </li>
        <li>
          <div class="icon dashicons-fa-medkit"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-medkit">
        </li>
        <li>
          <div class="icon dashicons-fa-motorcycle"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-motorcycle">
        </li>
        <li>
          <div class="icon dashicons-fa-moon-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-moon-o">
        </li>
        <li>
          <div class="icon dashicons-fa-money"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-money">
        </li>
        <li>
          <div class="icon dashicons-fa-mobile"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-mobile">
        </li>
        <li>
          <div class="icon dashicons-fa-minus-square-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-minus-square-o">
        </li>
        <li>
          <div class="icon dashicons-fa-minus-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-minus-square">
        </li>
        <li>
          <div class="icon dashicons-fa-minus-circle"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-minus-circle">
        </li>
        <li>
          <div class="icon dashicons-fa-minus"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-minus">
        </li>
        <li>
          <div class="icon dashicons-fa-microphone-slash"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-microphone-slash">
        </li>
        <li>
          <div class="icon dashicons-fa-odnoklassniki"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-odnoklassniki">
        </li>
        <li>
          <div class="icon dashicons-fa-paper-plane"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-paper-plane">
        </li>
        <li>
          <div class="icon dashicons-fa-paper-plane-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-paper-plane-o">
        </li>
        <li>
          <div class="icon dashicons-fa-paperclip"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-paperclip">
        </li>
        <li>
          <div class="icon dashicons-fa-paragraph"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-paragraph">
        </li>
        <li>
          <div class="icon dashicons-fa-pause"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-pause">
        </li>
        <li>
          <div class="icon dashicons-fa-paw"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-paw">
        </li>
        <li>
          <div class="icon dashicons-fa-pencil"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-pencil">
        </li>
        <li>
          <div class="icon dashicons-fa-pencil-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-pencil-square">
        </li>
        <li>
          <div class="icon dashicons-fa-pencil-square-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-pencil-square-o">
        </li>
        <li>
          <div class="icon dashicons-fa-phone"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-phone">
        </li>
        <li>
          <div class="icon dashicons-fa-phone-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-phone-square">
        </li>
        <li>
          <div class="icon dashicons-fa-picture-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-picture-o">
        </li>
        <li>
          <div class="icon dashicons-fa-paypal"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-paypal">
        </li>
        <li>
          <div class="icon dashicons-fa-pie-chart"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-pie-chart">
        </li>
        <li>
          <div class="icon dashicons-fa-pied-piper"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-pied-piper">
        </li>
        <li>
          <div class="icon dashicons-fa-pied-piper-alt"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-pied-piper-alt">
        </li>
        <li>
          <div class="icon dashicons-fa-pinterest"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-pinterest">
        </li>
        <li>
          <div class="icon dashicons-fa-pinterest-p"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-pinterest-p">
        </li>
        <li>
          <div class="icon dashicons-fa-pinterest-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-pinterest-square">
        </li>
        <li>
          <div class="icon dashicons-fa-plane"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-plane">
        </li>
        <li>
          <div class="icon dashicons-fa-play"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-play">
        </li>
        <li>
          <div class="icon dashicons-fa-play-circle"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-play-circle">
        </li>
        <li>
          <div class="icon dashicons-fa-play-circle-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-play-circle-o">
        </li>
        <li>
          <div class="icon dashicons-fa-plug"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-plug">
        </li>
        <li>
          <div class="icon dashicons-fa-plus"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-plus">
        </li>
        <li>
          <div class="icon dashicons-fa-plus-circle"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-plus-circle">
        </li>
        <li>
          <div class="icon dashicons-fa-rebel"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-rebel">
        </li>
        <li>
          <div class="icon dashicons-fa-random"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-random">
        </li>
        <li>
          <div class="icon dashicons-fa-quote-right"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-quote-right">
        </li>
        <li>
          <div class="icon dashicons-fa-quote-left"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-quote-left">
        </li>
        <li>
          <div class="icon dashicons-fa-question-circle"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-question-circle">
        </li>
        <li>
          <div class="icon dashicons-fa-question"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-question">
        </li>
        <li>
          <div class="icon dashicons-fa-qrcode"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-qrcode">
        </li>
        <li>
          <div class="icon dashicons-fa-qq"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-qq">
        </li>
        <li>
          <div class="icon dashicons-fa-puzzle-piece"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-puzzle-piece">
        </li>
        <li>
          <div class="icon dashicons-fa-print"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-print">
        </li>
        <li>
          <div class="icon dashicons-fa-power-off"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-power-off">
        </li>
        <li>
          <div class="icon dashicons-fa-plus-square-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-plus-square-o">
        </li>
        <li>
          <div class="icon dashicons-fa-plus-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-plus-square">
        </li>
        <li>
          <div class="icon dashicons-fa-recycle"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-recycle">
        </li>
        <li>
          <div class="icon dashicons-fa-reddit"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-reddit">
        </li>
        <li>
          <div class="icon dashicons-fa-reddit-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-reddit-square">
        </li>
        <li>
          <div class="icon dashicons-fa-refresh"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-refresh">
        </li>
        <li>
          <div class="icon dashicons-fa-registered"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-registered">
        </li>
        <li>
          <div class="icon dashicons-fa-repeat"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-repeat">
        </li>
        <li>
          <div class="icon dashicons-fa-renren"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-renren">
        </li>
        <li>
          <div class="icon dashicons-fa-reply"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-reply">
        </li>
        <li>
          <div class="icon dashicons-fa-reply-all"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-reply-all">
        </li>
        <li>
          <div class="icon dashicons-fa-retweet"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-retweet">
        </li>
        <li>
          <div class="icon dashicons-fa-road"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-road">
        </li>
        <li>
          <div class="icon dashicons-fa-rocket"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-rocket">
        </li>
        <li>
          <div class="icon dashicons-fa-rss"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-rss">
        </li>
        <li>
          <div class="icon dashicons-fa-share-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-share-square">
        </li>
        <li>
          <div class="icon dashicons-fa-share-alt-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-share-alt-square">
        </li>
        <li>
          <div class="icon dashicons-fa-share-alt"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-share-alt">
        </li>
        <li>
          <div class="icon dashicons-fa-share"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-share">
        </li>
        <li>
          <div class="icon dashicons-fa-server"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-server">
        </li>
        <li>
          <div class="icon dashicons-fa-sellsy"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-sellsy">
        </li>
        <li>
          <div class="icon dashicons-fa-search-plus"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-search-plus">
        </li>
        <li>
          <div class="icon dashicons-fa-search-minus"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-search-minus">
        </li>
        <li>
          <div class="icon dashicons-fa-search"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-search">
        </li>
        <li>
          <div class="icon dashicons-fa-scissors"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-scissors">
        </li>
        <li>
          <div class="icon dashicons-fa-safari"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-safari">
        </li>
        <li>
          <div class="icon dashicons-fa-rub"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-rub">
        </li>
        <li>
          <div class="icon dashicons-fa-rss-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-rss-square">
        </li>
        <li>
          <div class="icon dashicons-fa-share-square-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-share-square-o">
        </li>
        <li>
          <div class="icon dashicons-fa-shield"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-shield">
        </li>
        <li>
          <div class="icon dashicons-fa-ship"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-ship">
        </li>
        <li>
          <div class="icon dashicons-fa-shirtsinbulk"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-shirtsinbulk">
        </li>
        <li>
          <div class="icon dashicons-fa-shopping-cart"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-shopping-cart">
        </li>
        <li>
          <div class="icon dashicons-fa-sign-in"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-sign-in">
        </li>
        <li>
          <div class="icon dashicons-fa-sign-out"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-sign-out">
        </li>
        <li>
          <div class="icon dashicons-fa-signal"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-signal">
        </li>
        <li>
          <div class="icon dashicons-fa-simplybuilt"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-simplybuilt">
        </li>
        <li>
          <div class="icon dashicons-fa-sitemap"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-sitemap">
        </li>
        <li>
          <div class="icon dashicons-fa-skyatlas"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-skyatlas">
        </li>
        <li>
          <div class="icon dashicons-fa-skype"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-skype">
        </li>
        <li>
          <div class="icon dashicons-fa-slack"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-slack">
        </li>
        <li>
          <div class="icon dashicons-fa-soundcloud"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-soundcloud">
        </li>
        <li>
          <div class="icon dashicons-fa-sort-numeric-desc"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-sort-numeric-desc">
        </li>
        <li>
          <div class="icon dashicons-fa-sort-numeric-asc"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-sort-numeric-asc">
        </li>
        <li>
          <div class="icon dashicons-fa-sort-desc"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-sort-desc">
        </li>
        <li>
          <div class="icon dashicons-fa-sort-asc"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-sort-asc">
        </li>
        <li>
          <div class="icon dashicons-fa-sort-amount-asc"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-sort-amount-asc">
        </li>
        <li>
          <div class="icon dashicons-fa-sort-alpha-desc"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-sort-alpha-desc">
        </li>
        <li>
          <div class="icon dashicons-fa-sort-alpha-asc"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-sort-alpha-asc">
        </li>
        <li>
          <div class="icon dashicons-fa-sort-amount-desc"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-sort-amount-desc">
        </li>
        <li>
          <div class="icon dashicons-fa-sort"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-sort">
        </li>
        <li>
          <div class="icon dashicons-fa-smile-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-smile-o">
        </li>
        <li>
          <div class="icon dashicons-fa-slideshare"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-slideshare">
        </li>
        <li>
          <div class="icon dashicons-fa-sliders"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-sliders">
        </li>
        <li>
          <div class="icon dashicons-fa-space-shuttle"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-space-shuttle">
        </li>
        <li>
          <div class="icon dashicons-fa-spinner"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-spinner">
        </li>
        <li>
          <div class="icon dashicons-fa-spoon"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-spoon">
        </li>
        <li>
          <div class="icon dashicons-fa-spotify"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-spotify">
        </li>
        <li>
          <div class="icon dashicons-fa-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-square">
        </li>
        <li>
          <div class="icon dashicons-fa-square-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-square-o">
        </li>
        <li>
          <div class="icon dashicons-fa-stack-exchange"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-stack-exchange">
        </li>
        <li>
          <div class="icon dashicons-fa-stack-overflow"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-stack-overflow">
        </li>
        <li>
          <div class="icon dashicons-fa-star"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-star">
        </li>
        <li>
          <div class="icon dashicons-fa-star-half"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-star-half">
        </li>
        <li>
          <div class="icon dashicons-fa-star-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-star-o">
        </li>
        <li>
          <div class="icon dashicons-fa-steam"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-steam">
        </li>
        <li>
          <div class="icon dashicons-fa-star-half-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-star-half-o">
        </li>
        <li>
          <div class="icon dashicons-fa-subway"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-subway">
        </li>
        <li>
          <div class="icon dashicons-fa-subscript"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-subscript">
        </li>
        <li>
          <div class="icon dashicons-fa-stumbleupon-circle"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-stumbleupon-circle">
        </li>
        <li>
          <div class="icon dashicons-fa-stumbleupon"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-stumbleupon">
        </li>
        <li>
          <div class="icon dashicons-fa-strikethrough"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-strikethrough">
        </li>
        <li>
          <div class="icon dashicons-fa-street-view"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-street-view">
        </li>
        <li>
          <div class="icon dashicons-fa-stop"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-stop">
        </li>
        <li>
          <div class="icon dashicons-fa-sticky-note-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-sticky-note-o">
        </li>
        <li>
          <div class="icon dashicons-fa-sticky-note"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-sticky-note">
        </li>
        <li>
          <div class="icon dashicons-fa-stethoscope"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-stethoscope">
        </li>
        <li>
          <div class="icon dashicons-fa-step-forward"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-step-forward">
        </li>
        <li>
          <div class="icon dashicons-fa-step-backward"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-step-backward">
        </li>
        <li>
          <div class="icon dashicons-fa-steam-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-steam-square">
        </li>
        <li>
          <div class="icon dashicons-fa-suitcase"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-suitcase">
        </li>
        <li>
          <div class="icon dashicons-fa-sun-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-sun-o">
        </li>
        <li>
          <div class="icon dashicons-fa-superscript"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-superscript">
        </li>
        <li>
          <div class="icon dashicons-fa-table"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-table">
        </li>
        <li>
          <div class="icon dashicons-fa-tablet"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-tablet">
        </li>
        <li>
          <div class="icon dashicons-fa-tachometer"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-tachometer">
        </li>
        <li>
          <div class="icon dashicons-fa-tag"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-tag">
        </li>
        <li>
          <div class="icon dashicons-fa-tags"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-tags">
        </li>
        <li>
          <div class="icon dashicons-fa-tasks"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-tasks">
        </li>
        <li>
          <div class="icon dashicons-fa-taxi"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-taxi">
        </li>
        <li>
          <div class="icon dashicons-fa-television"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-television">
        </li>
        <li>
          <div class="icon dashicons-fa-terminal"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-terminal">
        </li>
        <li>
          <div class="icon dashicons-fa-times-circle"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-times-circle">
        </li>
        <li>
          <div class="icon dashicons-fa-times"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-times">
        </li>
        <li>
          <div class="icon dashicons-fa-tencent-weibo"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-tencent-weibo">
        </li>
        <li>
          <div class="icon dashicons-fa-ticket"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-ticket">
        </li>
        <li>
          <div class="icon dashicons-fa-thumbs-up"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-thumbs-up">
        </li>
        <li>
          <div class="icon dashicons-fa-thumbs-o-up"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-thumbs-o-up">
        </li>
        <li>
          <div class="icon dashicons-fa-thumbs-o-down"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-thumbs-o-down">
        </li>
        <li>
          <div class="icon dashicons-fa-thumbs-down"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-thumbs-down">
        </li>
        <li>
          <div class="icon dashicons-fa-thumb-tack"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-thumb-tack">
        </li>
        <li>
          <div class="icon dashicons-fa-th-list"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-th-list">
        </li>
        <li>
          <div class="icon dashicons-fa-th-large"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-th-large">
        </li>
        <li>
          <div class="icon dashicons-fa-th"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-th">
        </li>
        <li>
          <div class="icon dashicons-fa-text-width"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-text-width">
        </li>
        <li>
          <div class="icon dashicons-fa-text-height"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-text-height">
        </li>
        <li>
          <div class="icon dashicons-fa-times-circle-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-times-circle-o">
        </li>
        <li>
          <div class="icon dashicons-fa-tint"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-tint">
        </li>
        <li>
          <div class="icon dashicons-fa-toggle-off"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-toggle-off">
        </li>
        <li>
          <div class="icon dashicons-fa-toggle-on"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-toggle-on">
        </li>
        <li>
          <div class="icon dashicons-fa-trademark"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-trademark">
        </li>
        <li>
          <div class="icon dashicons-fa-train"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-train">
        </li>
        <li>
          <div class="icon dashicons-fa-transgender"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-transgender">
        </li>
        <li>
          <div class="icon dashicons-fa-transgender-alt"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-transgender-alt">
        </li>
        <li>
          <div class="icon dashicons-fa-trash"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-trash">
        </li>
        <li>
          <div class="icon dashicons-fa-trash-o"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-trash-o">
        </li>
        <li>
          <div class="icon dashicons-fa-tree"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-tree">
        </li>
        <li>
          <div class="icon dashicons-fa-trello"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-trello">
        </li>
        <li>
          <div class="icon dashicons-fa-tripadvisor"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-tripadvisor">
        </li>
        <li>
          <div class="icon dashicons-fa-trophy"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-trophy">
        </li>
        <li>
          <div class="icon dashicons-fa-truck"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-truck">
        </li>
        <li>
          <div class="icon dashicons-fa-try"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-try">
        </li>
        <li>
          <div class="icon dashicons-fa-tty"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-tty">
        </li>
        <li>
          <div class="icon dashicons-fa-tumblr"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-tumblr">
        </li>
        <li>
          <div class="icon dashicons-fa-tumblr-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-tumblr-square">
        </li>
        <li>
          <div class="icon dashicons-fa-twitch"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-twitch">
        </li>
        <li>
          <div class="icon dashicons-fa-twitter"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-twitter">
        </li>
        <li>
          <div class="icon dashicons-fa-twitter-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-twitter-square">
        </li>
        <li>
          <div class="icon dashicons-fa-umbrella"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-umbrella">
        </li>
        <li>
          <div class="icon dashicons-fa-underline"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-underline">
        </li>
        <li>
          <div class="icon dashicons-fa-undo"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-undo">
        </li>
        <li>
          <div class="icon dashicons-fa-university"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-university">
        </li>
        <li>
          <div class="icon dashicons-fa-venus-mars"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-venus-mars">
        </li>
        <li>
          <div class="icon dashicons-fa-venus-double"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-venus-double">
        </li>
        <li>
          <div class="icon dashicons-fa-venus"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-venus">
        </li>
        <li>
          <div class="icon dashicons-fa-users"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-users">
        </li>
        <li>
          <div class="icon dashicons-fa-user-times"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-user-times">
        </li>
        <li>
          <div class="icon dashicons-fa-user-secret"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-user-secret">
        </li>
        <li>
          <div class="icon dashicons-fa-user-plus"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-user-plus">
        </li>
        <li>
          <div class="icon dashicons-fa-user-md"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-user-md">
        </li>
        <li>
          <div class="icon dashicons-fa-user"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-user">
        </li>
        <li>
          <div class="icon dashicons-fa-usd"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-usd">
        </li>
        <li>
          <div class="icon dashicons-fa-upload"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-upload">
        </li>
        <li>
          <div class="icon dashicons-fa-unlock-alt"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-unlock-alt">
        </li>
        <li>
          <div class="icon dashicons-fa-unlock"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-unlock">
        </li>
        <li>
          <div class="icon dashicons-fa-viacoin"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-viacoin">
        </li>
        <li>
          <div class="icon dashicons-fa-video-camera"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-video-camera">
        </li>
        <li>
          <div class="icon dashicons-fa-vimeo"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-vimeo">
        </li>
        <li>
          <div class="icon dashicons-fa-vimeo-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-vimeo-square">
        </li>
        <li>
          <div class="icon dashicons-fa-vine"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-vine">
        </li>
        <li>
          <div class="icon dashicons-fa-vk"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-vk">
        </li>
        <li>
          <div class="icon dashicons-fa-volume-down"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-volume-down">
        </li>
        <li>
          <div class="icon dashicons-fa-volume-off"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-volume-off">
        </li>
        <li>
          <div class="icon dashicons-fa-volume-up"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-volume-up">
        </li>
        <li>
          <div class="icon dashicons-fa-weibo"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-weibo">
        </li>
        <li>
          <div class="icon dashicons-fa-weixin"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-weixin">
        </li>
        <li>
          <div class="icon dashicons-fa-whatsapp"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-whatsapp">
        </li>
        <li>
          <div class="icon dashicons-fa-wheelchair"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-wheelchair">
        </li>
        <li>
          <div class="icon dashicons-fa-youtube-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-youtube-square">
        </li>
        <li>
          <div class="icon dashicons-fa-youtube-play"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-youtube-play">
        </li>
        <li>
          <div class="icon dashicons-fa-youtube"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-youtube">
        </li>
        <li>
          <div class="icon dashicons-fa-yelp"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-yelp">
        </li>
        <li>
          <div class="icon dashicons-fa-yahoo"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-yahoo">
        </li>
        <li>
          <div class="icon dashicons-fa-y-combinator"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-y-combinator">
        </li>
        <li>
          <div class="icon dashicons-fa-xing-square"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-xing-square">
        </li>
        <li>
          <div class="icon dashicons-fa-xing"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-xing">
        </li>
        <li>
          <div class="icon dashicons-fa-wrench"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-wrench">
        </li>
        <li>
          <div class="icon dashicons-fa-wordpress"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-wordpress">
        </li>
        <li>
          <div class="icon dashicons-fa-windows"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-windows">
        </li>
        <li>
          <div class="icon dashicons-fa-wikipedia-w"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-wikipedia-w">
        </li>
        <li>
          <div class="icon dashicons-fa-wifi"></div>
          <input type="text" readonly="readonly" value="dashicons-fa-wifi">
        </li>
      </ul>
    </div>
    <script>(function() {
  var glyphs, i, len, ref;

  ref = document.getElementsByClassName('glyphs');
  for (i = 0, len = ref.length; i < len; i++) {
    glyphs = ref[i];
    glyphs.addEventListener('click', function(event) {
      if (event.target.tagName === 'INPUT') {
        return event.target.select();
      }
    });
  }

}).call(this);

    </script>
	<?php

}


function fa_dashicons_settings_section_callback(  ) { 

	echo __( 'Copy the code in the input fields and use in place of usual WordPress Dashicons.', 'fa-dashicons' );

}


function fa_dashicons_options_page(  ) { 

	?>
	<form action='options.php' method='post'>

		<h2>FontAwesome Dashicons</h2>

		<?php
		settings_fields( 'faDashicons' );
		do_settings_sections( 'faDashicons' );
		submit_button();
		?>

	</form>
	<?php

}

?>