document.addEventListener('alpine:init', () => {
  // Stores variable globally 
  Alpine.store('sidebar', {
      full: true,
      active: 'home',
      navOpen: false
  });
  // Creating component Dropdown
  Alpine.data('dropdown', () => ({
      open: false,
      toggle(tab) {
          this.open = !this.open;
          Alpine.store('sidebar').active = tab;
      },
      activeClass: 'active-class',
      expandedClass: 'expanded-class',
      shrinkedClass: 'shrinked-class'
  }));
  // Creating component Sub Dropdown
  Alpine.data('sub_dropdown', () => ({
      sub_open: false,
      sub_toggle() {
          this.sub_open = !this.sub_open;
      },
      sub_expandedClass: 'expanded-class',
      sub_shrinkedClass: 'shrinked-class'
  }));
  // Creating tooltip
  Alpine.data('tooltip', () => ({
      show: false,
      visibleClass:'visib-class'
  }))
  
})