<?php
/**
 * Template Name: Empty Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<section id="title" class="dark-section">
  <div class="hero">
    <div class="hero-overlay">
      <h1>Work with The Helonaki</h1>
      <h2>Open-Source Mapping, Data Analysis, Modeling, and Web Design</h2>
    </div>
    <img src="<?php echo get_theme_file_uri('images/Slider-ErosionModel.png') ?> " alt="REPLACE" class="hero-image">
  </div>
</section>

<section id="helonaki" class="light-section">
  <div class="container-fluid">
    <h2>Work With The Helonaki</h2>
    <div class="row">
      <div class="col-md-4">
        <img src="... " alt="TBD">
      </div>
      <div class="col-md-8">
        <p>GIS and data analysis are integral parts of modern archaeological and
          cultural heritage projects. New technologies increase our understanding
        of the past, but also require new skills.</p>
        <p><strong>The Helonaki can help you leverage new technologies so that
          you can focus on your research.</strong></p>
        <p>By working with The Helonaki, you save <strong>time</strong> you
          would otherwise spend performing rote GIS or data analysis tasks.</p>
      </div>
    </div>
  </div>
</section>

<section id="services" class="dark-section">
  <div class="container-fluid">
    <h2>Services Offered</h2>
    <div class="row p-4">
      <div class="col-md-6">
        <div class="card mb-3 services-card">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="..." class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">GIS and Remote Sensing</h5>
                <p class="card-text">Tincidunt praesent semper feugiat nibh sed pulvinar. Sed velit
                  dignissim sodales ut eu sem integer vitae. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-3 services-card">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="..." class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Data Analysis and Modeling</h5>
                <p class="card-text">Tincidunt praesent semper feugiat nibh sed pulvinar. Sed velit
                  dignissim sodales ut eu sem integer vitae. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row p-4">
      <div class="col-md-6">
        <div class="card mb-3 services-card">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="..." class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Web Mapping</h5>
                <p class="card-text">Tincidunt praesent semper feugiat nibh sed pulvinar. Sed velit
                  dignissim sodales ut eu sem integer vitae. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-3 services-card">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="..." class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Website Design</h5>
                <p class="card-text">Tincidunt praesent semper feugiat nibh sed pulvinar. Sed velit
                  dignissim sodales ut eu sem integer vitae. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
