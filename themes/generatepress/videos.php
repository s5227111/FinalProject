<?php
/**
 * Template Name:  Videos
 * @package Respected.org
 */
get_header(); ?>

<div>
    <script src="https://player.vimeo.com/api/player.js"></script>
    <iframe src="https://player.vimeo.com/video/791240564?h=d5cf348f24&title=0&byline=0&portrait=0" 
    width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" 
    allowfullscreen></iframe>
    <script>
    var iframe = document.querySelector('iframe');
    var player = new Vimeo.Player(iframe);
    player.on('ended', function() {$("#ex1").modal()});
    </script>
</div>

<?php get_footer(); ?>