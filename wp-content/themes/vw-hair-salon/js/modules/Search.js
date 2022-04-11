import $ from 'jquery';

class Search {
  constructor() {
    this.open = $(".js-search-trigger");
    this.close = $(".search-overlay__close");
    this.overlay = $(".search-overlay");
    this.searchfield = $("#search-term");
    this.searchresults = $("#search-overlay__results");
    this.docbody = $("body");
    this.eventHandlers();
    this.overlayOpen = false;
    this.loading = false;
    this.isSpinnerVisible=false;
    this.typingTimer;
    this.previousval;
  
  }

  eventHandlers() {
    this.open.on("click", this.openOverlay.bind(this));
    this.close.on("click", this.closeOverlay.bind(this));
    $(document).on("keydown", this.keyPressDispatch.bind(this));
    this.searchfield.on("keyup", this.typingLogic.bind(this));
  }

  openOverlay() {
    this.overlay.addClass("search-overlay--active");
    this.docbody.addClass("body-no-scroll");
    this.overlayOpen = true;
  }

  closeOverlay() {
    this.overlay.removeClass("search-overlay--active");
    this.docbody.removeClass("body-no-scroll");
    this.overlayOpen = false;
  }
 
typingLogic() {
  if (this.searchfield.val() != this.previousval) {
    clearTimeout(this.typingTimer);
    if (this.searchfield.val()) {
      if (!this.isSpinnerVisible){
        this.searchresults.html(`<div class="spinner-loader"> </div>`);
        this.isSpinnerVisible=true;
      }
    this.typingTimer = setTimeout(this.getResults.bind(this), 2000);
  } else {
    this.searchresults.html('');
    this.isSpinnerVisible=false;
  }
}
  this.previousval = this.searchfield.val();
}
getResults(){
    $.getJSON(universityData.root_url+'/wp-json/wp/v2/posts?search=' +
    this.searchfield.val(), posts=>{
      this.searchresults.html(`
        <div class="container">
          <main id="maincontent" role="main" class="middle-align">
          <div class="row">
          <h1 class="entry-title">Search Results for ${this.searchfield.val()}</h1>
                  
            <article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
              <div class="service-box wow bounceInDown delay-1000" data-wow-duration="2s">
                <div class="sidebar col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1');?></div>
                <div id="our-services" class="services col-lg-8 col-md-8">
                  
                    ${posts.map(item=>`
                    <div class="entry-content">
                    
                      <a href="${item.link}"> ${item.title.rendered}</a>
                      <span>${item.excerpt.rendered}</span>
                      </div>
                      `)}
                    </div>
                </div>
              </div>
            </article>
            </div>
          </main>
        </div>
      `);
    });
  }
  keyPressDispatch(evt) {
    if (evt.keyCode == 83 && !this.overlayOpen) this.openOverlay();
    if (evt.keyCode == 27 && this.overlayOpen) this.closeOverlay();
  }
}
export default Search;


