<section id="masthead" class="grid-container full hero" role="banner">
 <div class="grid-container">
  <div class="grid-x">
    <hgroup class="cell small-2 medium-2">
     <div class="wo-ident">
      <style>.ident-path{fill:#95bb2f;}</style>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 121 157" preserveAspectRatio="none">
       <g id="ident" data-name="ident"><g id="Layer_1-2" data-name="ident-inner"><path class="ident-path" d="M19.66,154.29,24.47,157c30.43-6.36,59.9-27.57,63.78-60.26l-5.7-4.38a74.54,74.54,0,0,1-20.77,4.9L58.21,100C51.83,117.3,33.1,126.17,16,129.41l-3.17,5.48Z" /><path class="ident-path" d="M1.21,34.14,0,36.63C28,137.2,141.08,91.17,117.89,1.55L115.62,0,95.51,2.31,93.74,5c19.11,67.59-54.15,89.56-71,22.83l-2.84-1.41Z" /><path class="ident-path" d="M44.13,46.84C39.64,33.5,45.2,19.38,56.54,15.3S80.73,18.7,85.23,32s-1,27.49-12.4,31.59S48.61,60.2,44.13,46.84Z" /> </g></g>
      </svg>
     </div>
     <div class="wo-logo">
     <?php
     $custom_logo_id = get_theme_mod( 'custom_logo' );
     $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
     echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="Welwyn Osteopaths">'; 
     ?> 
     </div>
     <p class="wo-title">The Osteopathic Centre</p>
    </hgroup>
  </div>
 </div>
</section><!-- /#masthead.hero -->