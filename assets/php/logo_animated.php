<?php
// Animated Art Farm logo used as the navbar brand. The draw- and colour-swipe
// animations live in css/openinglogo.css (.navbar-logo-anim).
$SVGPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/svg_elements/';
// Pages that want the logo to draw itself set $ANIMATE_LOGO = true before
// including this file. Everywhere else the logo is shown finished. The opening
// overlay on index.php passes its own $LOGO_CLASS to skip the navbar sizing.
$logoClass = $LOGO_CLASS ?? 'artfarm-logo navbar-logo-anim';
if (!empty($ANIMATE_LOGO)) {
  $logoClass .= ' logo-animate';
}
?>
<svg class="<?php echo $logoClass; ?>" viewBox="0 0 1080 1080" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Art Farm logo">
  <defs>
    <mask id="mask1" maskUnits="userSpaceOnUse" maskContentUnits="userSpaceOnUse" x="0" y="0" width="100%" height="100%">
      <?php echo file_get_contents($SVGPATH . 'ArtFarmLogoMask.svg'); ?>
    </mask>
  </defs>
  <?php echo file_get_contents($SVGPATH . 'ArtFarmLogoTracing.svg'); ?>
  <!-- Simplified parallelograms -->
  <g mask="url(#mask1)">
    <g class="animated-swipe">
      <?php echo file_get_contents($SVGPATH . 'colorSwipe.svg'); ?>
    </g>
  </g>
</svg>
