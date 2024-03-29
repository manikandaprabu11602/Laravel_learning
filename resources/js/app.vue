<template>
  <div
    class="page-wrapper"
    id="main-wrapper"
    data-layout="vertical"
    data-navbarbg="skin6"
    data-sidebartype="full"
    data-sidebar-position="fixed"
    data-header-position="fixed"
  >
    <SidebarChildComponent />
    <div class="body-wrapper">
      <HeaderChildComponent />
      <div class="container-fluid">
        <MainChildComponent />
        <FooterChildComponent />
      </div>
    </div>
  </div>
</template>

<script>
import SidebarChildComponent from "./sidebar.vue";
import HeaderChildComponent from "./header.vue";
import MainChildComponent from "./main.vue";
import FooterChildComponent from "./footer.vue";

export default {
  name: "ParentComponent",
  components: {
    SidebarChildComponent,
    HeaderChildComponent,
    MainChildComponent,
    FooterChildComponent,
  },
};
</script>
