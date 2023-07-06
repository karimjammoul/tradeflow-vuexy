<x-layouts.base>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
          <!-- Layout container -->
          @yield('content')
          <!-- / Layout page -->
        </div>
  
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
  
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
</x-layouts.base>