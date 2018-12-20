<template>
  <li class="nav-item dropdown d-none d-lg-flex nav-language">
    <div class="nav-link">
      <span class="dropdown-toggle btn btn-sm" id="languageDropdown" data-toggle="dropdown">English
        <i class="flag-icon flag-icon-gb ml-2"></i>
      </span>
      <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
        <a class="dropdown-item font-weight-medium">
          French
          <i class="flag-icon flag-icon-fr ml-2"></i>
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item font-weight-medium">
          Espanol
          <i class="flag-icon flag-icon-es ml-2"></i>
        </a>
        <div class="dropdown-divider"></div>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item font-weight-medium">
          Arabic
          <i class="flag-icon flag-icon-sa ml-2"></i>
        </a>
      </div>
    </div>
  </li> 
</template>

<script>
export default {
  name: 'LanguageSwitcher'
}
</script>
