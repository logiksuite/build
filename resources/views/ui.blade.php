<?php

use LogikSuite\Build\LogikBuild;

?>
<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta3
* @link https://tabler.io
* Copyright 2018-2021 The Tabler Authors
* Copyright 2018-2021 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>      
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>LogikBuild</title>    
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://www.googletagmanager.com" crossorigin>
    <meta name="msapplication-TileColor" content="#206bc4"/>
    <meta name="theme-color" content="#206bc4"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon"/>
    <meta name="description" content=""/>    
    <!-- CSS files -->
    <link href="/logikbuild/assets/@tabler/core/dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="/logikbuild/assets/@tabler/core/dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="/logikbuild/assets/@tabler/core/dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="/logikbuild/assets/@tabler/core/dist/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="/logikbuild/assets/@tabler/core/dist/css/demo.min.css" rel="stylesheet"/>
  </head>
  <body class="antialiased">
    <div class="wrapper">
      <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark">            
              <svg width="216" height="50" viewBox="0 0 216 70" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M79.6705 41.5302H87.7179V45.6671H74.6406L74.6035 23.3353H79.6332L79.6705 41.5302Z" fill="white"></path>
        <path d="M96.3986 29.5027C97.5536 29.5027 98.6341 29.6941 99.6028 30.0772C100.571 30.4603 101.391 30.9965 102.099 31.6859C102.807 32.3756 103.329 33.2565 103.701 34.2524C104.074 35.2484 104.26 36.3975 104.297 37.6615C104.297 38.9256 104.111 40.0747 103.738 41.0706C103.366 42.1049 102.807 42.9477 102.136 43.6753C101.428 44.4031 100.609 44.9396 99.6399 45.3224C98.6712 45.7055 97.5907 45.8971 96.4357 45.8971C95.2436 45.8971 94.1631 45.7055 93.1944 45.3224C92.2258 44.9396 91.4063 44.4033 90.6984 43.6753C89.9905 42.9477 89.4689 42.1049 89.0589 41.0706C88.6863 40.0365 88.5 38.9256 88.4629 37.6615C88.4629 36.3975 88.6492 35.2866 89.0218 34.2524C89.3944 33.2565 89.9531 32.3753 90.661 31.6859C91.3689 30.9965 92.1886 30.4219 93.1573 30.0772C94.126 29.6941 95.2065 29.5027 96.3986 29.5027ZM96.3986 42.373C97.4791 42.373 98.2615 41.9902 98.7459 41.224C99.2304 40.458 99.4912 39.2705 99.4912 37.6999C99.4912 36.1293 99.2304 34.9421 98.7459 34.1757C98.2615 33.4097 97.442 33.0266 96.3986 33.0266C95.3181 33.0266 94.4986 33.4097 94.0142 34.1757C93.4926 34.9419 93.2691 36.1291 93.2691 37.6999C93.2691 39.2703 93.5299 40.4578 94.0515 41.224C94.4986 41.9902 95.3183 42.373 96.3986 42.373Z" fill="white"></path>
        <path d="M112.233 29.4643C112.903 29.4643 113.5 29.5411 114.096 29.6558C114.692 29.7706 115.213 29.9621 115.698 30.2303H120.355V31.954C120.355 32.2221 120.28 32.4137 120.131 32.5668C119.982 32.72 119.759 32.8352 119.386 32.9115L118.268 33.1797C118.417 33.6395 118.492 34.099 118.492 34.5971C118.492 35.4015 118.343 36.0911 118.007 36.7421C117.672 37.3931 117.225 37.9296 116.666 38.3509C116.107 38.8105 115.437 39.1552 114.692 39.3852C113.909 39.6149 113.09 39.7299 112.233 39.7299C111.748 39.7299 111.301 39.6915 110.854 39.6531C110.519 39.8446 110.333 40.1128 110.333 40.3809C110.333 40.649 110.482 40.8406 110.742 40.9553C111.003 41.0701 111.376 41.1469 111.823 41.1853C112.27 41.2237 112.792 41.2618 113.35 41.2618C113.909 41.2618 114.505 41.3003 115.101 41.3387C115.697 41.377 116.294 41.4918 116.853 41.6068C117.412 41.7217 117.933 41.9515 118.38 42.258C118.827 42.5643 119.2 42.9476 119.461 43.4455C119.722 43.9433 119.871 44.5564 119.871 45.3608C119.871 46.0886 119.722 46.7782 119.349 47.4678C119.014 48.1572 118.529 48.7703 117.859 49.3063C117.188 49.8426 116.406 50.2641 115.437 50.609C114.468 50.9153 113.388 51.1068 112.158 51.1068C110.929 51.1068 109.886 50.9921 109.029 50.7624C108.135 50.5324 107.426 50.2261 106.83 49.843C106.234 49.4599 105.825 49.0002 105.526 48.5024C105.266 48.0043 105.117 47.4683 105.117 46.932C105.117 46.2424 105.34 45.6296 105.75 45.1317C106.16 44.6336 106.756 44.2505 107.464 43.9826C107.129 43.7527 106.831 43.4464 106.644 43.0633C106.421 42.6804 106.346 42.2207 106.346 41.6844C106.346 41.4545 106.384 41.1864 106.458 40.9566C106.533 40.6885 106.645 40.4586 106.831 40.1907C107.017 39.9607 107.203 39.6926 107.464 39.501C107.725 39.2711 108.023 39.0798 108.396 38.8882C107.576 38.4667 106.943 37.8539 106.496 37.1263C106.048 36.3985 105.788 35.5557 105.788 34.5982C105.788 33.7938 105.937 33.066 106.272 32.4532C106.607 31.8019 107.054 31.2657 107.613 30.8444C108.172 30.4229 108.843 30.04 109.625 29.8101C110.408 29.5801 111.339 29.4643 112.233 29.4643ZM115.698 46.1651C115.698 45.897 115.623 45.7055 115.474 45.5523C115.325 45.3992 115.102 45.2842 114.841 45.1692C114.58 45.0926 114.282 45.0161 113.909 44.9779C113.574 44.9395 113.164 44.9011 112.754 44.9011C112.344 44.9011 111.935 44.9011 111.487 44.9011C111.04 44.9011 110.63 44.8627 110.184 44.7863C109.886 44.9779 109.662 45.2076 109.476 45.4757C109.289 45.7441 109.215 46.012 109.215 46.3185C109.215 46.5485 109.252 46.74 109.364 46.9316C109.476 47.1231 109.625 47.2763 109.848 47.3912C110.072 47.5062 110.407 47.6212 110.817 47.6975C111.227 47.7743 111.711 47.8123 112.345 47.8123C113.015 47.8123 113.574 47.7741 113.984 47.6975C114.394 47.621 114.766 47.506 114.99 47.3528C115.251 47.1997 115.437 47.0465 115.511 46.8166C115.66 46.6251 115.698 46.3951 115.698 46.1651ZM112.27 36.8571C113.052 36.8571 113.574 36.6655 113.947 36.2824C114.319 35.8995 114.468 35.3633 114.468 34.7505C114.468 34.0992 114.282 33.6014 113.947 33.2183C113.611 32.8352 113.052 32.682 112.27 32.682C111.488 32.682 110.966 32.8736 110.593 33.2183C110.258 33.6014 110.072 34.0994 110.072 34.7505C110.072 35.0568 110.109 35.3249 110.184 35.5932C110.258 35.8614 110.407 36.0529 110.593 36.2445C110.78 36.436 111.003 36.5892 111.264 36.7041C111.562 36.7805 111.86 36.8571 112.27 36.8571Z" fill="white"></path>
        <path d="M127.694 25.3656C127.694 25.7487 127.62 26.0932 127.471 26.4381C127.322 26.783 127.136 27.0512 126.875 27.3193C126.614 27.5874 126.316 27.779 125.981 27.9321C125.645 28.0853 125.273 28.1621 124.9 28.1621C124.528 28.1621 124.155 28.0853 123.857 27.9321C123.522 27.779 123.224 27.5874 123 27.3193C122.739 27.0512 122.553 26.783 122.404 26.4381C122.255 26.0932 122.181 25.7487 122.181 25.3656C122.181 24.9825 122.255 24.5994 122.404 24.2929C122.553 23.9484 122.739 23.6417 123 23.4119C123.261 23.1436 123.559 22.9523 123.857 22.7989C124.192 22.6457 124.528 22.5692 124.9 22.5692C125.273 22.5692 125.645 22.6457 125.981 22.7989C126.316 22.9523 126.614 23.1436 126.875 23.4119C127.136 23.6801 127.322 23.9482 127.471 24.2929C127.62 24.6378 127.694 24.9825 127.694 25.3656ZM127.136 29.7324V45.6292H122.516V29.7324H127.136Z" fill="white"></path>
        <path d="M135.481 22.684V35.5546H136.152C136.45 35.5546 136.673 35.5162 136.822 35.4398C136.971 35.363 137.12 35.2098 137.269 34.9799L140.175 30.4983C140.362 30.23 140.548 30.0384 140.772 29.9237C140.995 29.8089 141.293 29.7321 141.665 29.7321H145.913L141.926 35.4014C141.74 35.6695 141.517 35.8995 141.293 36.091C141.069 36.2824 140.846 36.4739 140.585 36.6271C141.032 36.9718 141.405 37.4317 141.74 38.0061L146.099 45.5904H141.926C141.591 45.5904 141.293 45.5136 141.032 45.3989C140.771 45.2841 140.585 45.0926 140.399 44.7861L137.455 39.1552C137.306 38.887 137.157 38.7339 137.008 38.6571C136.859 38.5803 136.636 38.5423 136.337 38.5423H135.443V45.5904H130.823L130.786 22.6456L135.481 22.684Z" fill="white"></path>
        <path d="M159.586 26.5146C159.512 26.7062 159.363 26.7827 159.214 26.7827C159.102 26.7827 158.916 26.7062 158.729 26.5146C158.543 26.3231 158.245 26.1315 157.91 25.9018C157.574 25.6718 157.127 25.4419 156.606 25.2506C156.084 25.059 155.451 24.944 154.668 24.944C153.886 24.944 153.215 25.059 152.656 25.2887C152.06 25.5187 151.576 25.825 151.203 26.2081C150.794 26.591 150.495 27.0509 150.309 27.5487C150.123 28.0466 150.011 28.5828 150.011 29.1575C150.011 29.8851 150.16 30.4981 150.458 30.9962C150.756 31.4943 151.166 31.8771 151.65 32.2218C152.135 32.5665 152.731 32.8347 153.327 33.0646C153.96 33.2946 154.594 33.5243 155.264 33.7542C155.935 33.984 156.568 34.2139 157.202 34.4818C157.835 34.7502 158.394 35.0949 158.878 35.5162C159.363 35.9377 159.772 36.4355 160.07 37.0102C160.368 37.623 160.517 38.3508 160.517 39.232C160.517 40.1511 160.368 40.9939 160.07 41.7983C159.772 42.6027 159.325 43.2923 158.766 43.9051C158.207 44.4798 157.5 44.9778 156.643 45.3225C155.823 45.667 154.854 45.8204 153.774 45.8204C152.396 45.8204 151.203 45.5523 150.197 45.0544C149.191 44.5563 148.297 43.8669 147.552 42.986L147.962 42.2964C148.074 42.1432 148.223 42.0664 148.372 42.0664C148.446 42.0664 148.558 42.1432 148.707 42.258C148.856 42.3727 149.005 42.5263 149.229 42.7176C149.415 42.9092 149.676 43.1007 149.936 43.2923C150.197 43.4838 150.533 43.7136 150.905 43.8667C151.278 44.0583 151.688 44.2114 152.172 44.3266C152.656 44.4414 153.178 44.5179 153.811 44.5179C154.631 44.5179 155.376 44.4032 156.047 44.1351C156.717 43.8667 157.239 43.5222 157.723 43.0623C158.17 42.6027 158.506 42.0664 158.766 41.4536C159.027 40.8407 159.139 40.1895 159.139 39.4617C159.139 38.6957 158.99 38.0829 158.692 37.5848C158.394 37.0867 157.984 36.6655 157.5 36.3589C157.015 36.0142 156.419 35.7461 155.823 35.5162C155.19 35.2862 154.556 35.0565 153.886 34.8649C153.215 34.635 152.582 34.4053 151.949 34.1374C151.315 33.869 150.756 33.5243 150.272 33.103C149.788 32.6815 149.378 32.1837 149.08 31.5708C148.782 30.958 148.633 30.1918 148.633 29.2343C148.633 28.5067 148.782 27.8171 149.043 27.1274C149.303 26.4378 149.713 25.8634 150.235 25.3271C150.756 24.8291 151.39 24.408 152.135 24.1013C152.88 23.795 153.774 23.6416 154.743 23.6416C155.823 23.6416 156.829 23.8331 157.686 24.1778C158.543 24.5225 159.363 25.097 160.071 25.825L159.586 26.5146Z" fill="white"></path>
        <path d="M165.287 30.3072V40.0368C165.287 41.454 165.622 42.603 166.256 43.4074C166.889 44.2118 167.857 44.6333 169.162 44.6333C170.13 44.6333 171.024 44.365 171.881 43.8671C172.701 43.369 173.483 42.6414 174.154 41.7603V30.3072H175.57V45.5524H174.787C174.527 45.5524 174.378 45.4377 174.378 45.1693L174.229 42.9093C173.558 43.7905 172.738 44.4799 171.844 45.0162C170.95 45.5524 169.944 45.8206 168.826 45.8206C168.006 45.8206 167.261 45.7058 166.665 45.4377C166.032 45.1693 165.548 44.7865 165.138 44.2886C164.728 43.7907 164.43 43.1777 164.206 42.4883C163.983 41.7987 163.908 40.9943 163.908 40.1133V30.3838L165.287 30.3072Z" fill="white"></path>
        <path d="M182.835 25.0594C182.835 25.2509 182.797 25.4041 182.723 25.5575C182.648 25.7106 182.537 25.8638 182.425 25.9787C182.313 26.0935 182.164 26.2087 182.015 26.285C181.866 26.3618 181.68 26.4 181.494 26.4C181.307 26.4 181.158 26.3616 180.972 26.285C180.823 26.2085 180.674 26.1319 180.562 25.9787C180.451 25.864 180.339 25.7106 180.264 25.5575C180.19 25.4043 180.153 25.2128 180.153 25.0594C180.153 24.8678 180.19 24.7147 180.264 24.5231C180.339 24.37 180.413 24.2168 180.562 24.1018C180.674 23.9869 180.823 23.8719 180.972 23.7953C181.121 23.7188 181.307 23.6806 181.494 23.6806C181.68 23.6806 181.829 23.719 182.015 23.7953C182.164 23.8721 182.313 23.9487 182.425 24.1018C182.537 24.2166 182.649 24.37 182.723 24.5231C182.797 24.6763 182.835 24.8678 182.835 25.0594ZM182.201 30.3072V45.5524H180.785V30.3072H182.201Z" fill="white"></path>
        <path d="M191.515 45.7822C190.51 45.7822 189.727 45.5139 189.168 44.9395C188.61 44.3648 188.349 43.4839 188.349 42.2964V31.8774H186.225C186.113 31.8774 186.039 31.8392 185.964 31.8008C185.89 31.724 185.853 31.6477 185.853 31.5325V30.958L188.386 30.7665L188.684 25.2888C188.684 25.2122 188.721 25.0972 188.796 25.059C188.87 24.9822 188.945 24.9441 189.056 24.9441H189.727V30.7665H194.384V31.8392H189.727V42.1816C189.727 42.6029 189.764 42.9476 189.876 43.2541C189.988 43.5604 190.137 43.7904 190.323 43.9819C190.51 44.1733 190.733 44.3266 190.957 44.4032C191.218 44.48 191.478 44.5564 191.776 44.5564C192.149 44.5564 192.447 44.518 192.708 44.4032C192.968 44.2885 193.192 44.1733 193.379 44.0585C193.565 43.9438 193.714 43.8288 193.826 43.7138C193.937 43.5991 194.049 43.5607 194.124 43.5607C194.198 43.5607 194.272 43.5991 194.347 43.7138L194.72 44.365C194.347 44.7865 193.863 45.1312 193.267 45.3994C192.67 45.6673 192.112 45.7822 191.515 45.7822Z" fill="white"></path>
        <path d="M203.661 30.0392C204.481 30.0392 205.263 30.1921 205.971 30.4989C206.679 30.8052 207.312 31.2265 207.834 31.8013C208.355 32.3758 208.765 33.0654 209.063 33.9082C209.362 34.751 209.511 35.6701 209.511 36.7428C209.511 36.9725 209.473 37.1257 209.399 37.2025C209.324 37.2791 209.25 37.3172 209.101 37.3172H198.408V37.6236C198.408 38.7726 198.557 39.7686 198.781 40.6497C199.042 41.5309 199.414 42.2585 199.898 42.8332C200.383 43.4076 200.942 43.8673 201.612 44.1736C202.283 44.4801 203.028 44.6335 203.885 44.6335C204.63 44.6335 205.263 44.5567 205.822 44.3651C206.381 44.1736 206.828 44.0204 207.201 43.7907C207.573 43.5991 207.871 43.4076 208.095 43.216C208.318 43.0629 208.467 42.9479 208.579 42.9479C208.691 42.9479 208.803 42.9863 208.877 43.1011L209.25 43.5991C209.026 43.9054 208.691 44.1736 208.318 44.4419C207.908 44.71 207.498 44.94 207.014 45.1315C206.53 45.3229 206.008 45.476 205.45 45.5912C204.891 45.706 204.332 45.7444 203.773 45.7444C202.767 45.7444 201.836 45.5528 201.016 45.2081C200.196 44.8634 199.451 44.3272 198.855 43.6378C198.259 42.9481 197.812 42.1056 197.477 41.0712C197.141 40.0753 196.992 38.9262 196.992 37.6238C196.992 36.5129 197.141 35.5169 197.439 34.5978C197.737 33.6785 198.185 32.8741 198.743 32.2229C199.302 31.5716 200.01 31.0354 200.83 30.6525C201.649 30.2305 202.618 30.0392 203.661 30.0392ZM203.698 31.1117C202.916 31.1117 202.245 31.2265 201.649 31.4948C201.053 31.7245 200.531 32.1076 200.084 32.5673C199.637 33.027 199.302 33.5633 199.004 34.2145C198.706 34.8657 198.557 35.5935 198.445 36.3595H208.206C208.206 35.5551 208.095 34.8273 207.871 34.1761C207.647 33.5249 207.35 32.9886 206.94 32.5289C206.53 32.0693 206.082 31.7245 205.524 31.4948C204.965 31.2265 204.369 31.1117 203.698 31.1117Z" fill="white"></path>
        <path d="M32.6151 5.75321C17.1536 5.75321 4.63525 18.624 4.63525 34.5205C4.63525 22.8758 13.8378 13.4525 25.1638 13.4525C36.49 13.4525 45.6923 22.914 45.6923 34.5586C45.6923 41.9898 39.8429 47.9654 32.6151 47.9654C25.648 47.9654 19.9104 42.3348 19.5752 35.2483C19.9478 46.5866 28.964 55.665 40.0666 55.665C51.3925 55.665 60.558 46.2419 60.5951 34.597V34.5586C60.5951 18.624 48.0768 5.75321 32.6151 5.75321Z" fill="url(#paint0_linear_2)"></path>
        <path d="M40.1034 55.6265C28.7774 55.6265 19.5749 46.1651 19.5749 34.5204C19.5749 27.0892 25.4243 21.1136 32.6521 21.1136C39.6192 21.1136 45.3568 26.7445 45.692 33.8308C45.3194 22.4924 36.3032 13.4143 25.2006 13.4143C13.8373 13.4143 4.67211 22.8372 4.63477 34.482V34.5204C4.63477 50.4171 17.1531 63.2874 32.6146 63.2874C48.0761 63.2874 60.5948 50.4171 60.5948 34.5204C60.5948 46.2034 51.4296 55.6265 40.1034 55.6265Z" fill="url(#paint1_linear_2)"></path>
        <defs>
            <linearGradient id="paint0_linear_2" x1="32.6131" y1="55.6642" x2="32.6131" y2="5.7518" gradientUnits="userSpaceOnUse">
                <stop stop-color="#F15A24"></stop>
                <stop offset="1" stop-color="#FCEE21"></stop>
            </linearGradient>
            <linearGradient id="paint1_linear_2" x1="4.63225" y1="38.3501" x2="60.593" y2="38.3501" gradientUnits="userSpaceOnUse">
                <stop stop-color="#F15A24"></stop>
                <stop offset="1" stop-color="#FCEE21"></stop>
            </linearGradient>
        </defs>
          </svg>            
          </h1>
          
          <div class="navbar-nav flex-row d-lg-none">
            
            <div class="nav-item dropdown d-none d-md-flex me-3">
              <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                <span class="badge bg-red"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                <div class="card">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet debitis et magni maxime necessitatibus ullam.
                  </div>
                </div>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" style=""></span>
                <div class="d-none d-xl-block ps-2">
                  <div>User</div>
                  <div class="mt-1 small text-muted">Some title</div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="#" class="dropdown-item">Set status</a>
                <a href="#" class="dropdown-item">Profile & account</a>
                <a href="#" class="dropdown-item">Feedback</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">Settings</a>
                <a href="#" class="dropdown-item">Logout</a>
              </div>
            </div>
          </div>
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav pt-lg-3">
              <li class="nav-item">
                <a class="nav-link" href="#" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Home
                  </span>
                </a>
              </li>
              
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle{{ $menu_translation ?? '' }}" href="#navbar-extra" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-language" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 7h7m-2 -2v2a5 8 0 0 1 -5 8m1 -4a7 4 0 0 0 6.7 4"></path><path d="M11 19l4 -9l4 9m-.9 -2h-6.2"></path></svg>
                  </span>
                  <span class="nav-link-title">
                    Translation
                  </span>
                </a>
                <div class="dropdown-menu{{ $menu_translation ?? '' }}">
                  <a class="dropdown-item{{ $menu_translation_language ?? '' }}" href="/translation/language">
                    Locales
                  </a>                  
                  <a class="dropdown-item{{ $menu_translation_editor ?? '' }}" href="/translation/editor" >
                    Translations
                  </a>
                </div>
              </li>
             
              

              <li class="nav-item">
                <a class="nav-link" href="./docs/index.html" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="9" y1="9" x2="10" y2="9" /><line x1="9" y1="13" x2="15" y2="13" /><line x1="9" y1="17" x2="15" y2="17" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Documentation
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./docs/index.html" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-github" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"></path></svg>
                  </span>
                  <span class="nav-link-title">
                    Github
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </aside>
      <header class="navbar navbar-expand-md navbar-light sticky-top d-none d-lg-flex d-print-none">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item dropdown d-none d-md-flex me-3">
              <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                <span class="badge bg-red"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                <div class="card">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet debitis et magni maxime necessitatibus ullam.
                  </div>
                </div>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" data-ui-mapping="Developer.Image" style="background-image: url(https://www.gravatar.com/avatar/{{ md5('bgauthier@globalia.com') }}?d=mp)"></span>
                <div class="d-none d-xl-block ps-2">
                  <div data-ui-mapping="Developer.Name"></div>
                  <div data-ui-mapping="Developer.Title" class="mt-1 small text-muted"></div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">                
                <a href="javascript: LogikBuild.modules.Developer.showConfigDialog();" class="dropdown-item">Developer information</a>                
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">Settings</a>                
              </div>
            </div>
          </div>
          <div class="collapse navbar-collapse" id="navbar-menu">            
          </div>
        </div>
      </header>
      <div class="page-wrapper">
        <div class="container-fluid">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                  {{ $page_subtitle ?? '' }}
                </div>
                <h2 class="page-title">
                {{ $page_title ?? '' }}
                </h2>
              </div>
              <!-- Page title actions -->
              <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">       
                  {!!  $actions ?? ''  !!}                                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-fluid">
            <div class="row row-deck row-cards">
              
            {!! $page_content ?? '' !!}  
              
            </div>
          </div>
        </div>
        <footer class="footer footer-transparent d-print-none">
          <div class="container-fluid">
            <div class="row text-center align-items-center flex-row-reverse">
              <div class="col-lg-auto ms-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item"><a href="#" class="link-secondary">Documentation</a></li>
                  <li class="list-inline-item"><a href="#" class="link-secondary">License</a></li>
                  <li class="list-inline-item"><a href="#" target="_blank" class="link-secondary" rel="noopener">Source code</a></li>                  
                </ul>
              </div>
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item">
                    Copyright &copy; <?php echo date("Y"); ?>
                    <a href="https:://www.logiksuite.com" class="link-secondary">LogikSuite</a>.
                    All rights reserved.
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="link-secondary" rel="noopener">v1.0.0</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <div class="modal modal-blur fade" id="developerInfoDialog" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Developer information</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
            We need a few pieces of info in order to keep track of who does what in the project. Please provide the following information.
            </div>

            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" class="form-control" id="developerName" name="developerName" placeholder="Your name">
            </div>

            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" id="developerEmail" name="developerEmail" placeholder="Your email">
            </div>

            <div class="mb-3">
              <label class="form-label">Title</label>
              <input type="text" class="form-control" id="developerTitle" name="developerTitle" placeholder="Your title">
            </div>

          </div>
          <div class="modal-footer">            
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onClick="LogikBuild.modules.Developer.saveConfig();">Save</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal modal-blur fade" id="confirmModal" tabindex="-1" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div id="confirmTitle" class="modal-title">Are you sure?</div>
            <div id="confirmMessage">If you proceed, you will lose all your personal data.</div>
          </div>
          <div class="modal-footer">
            <button id="confirmCancel" type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
            <button id="confirmYes" type="button" class="btn btn-danger" data-bs-dismiss="modal">Yes, delete all my data</button>
          </div>
        </div>
      </div>
    </div>


    <div class="modal modal-blur fade" id="translationEditorDialog" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Translation editor</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
            Instructions
            </div>

            <div class="mb-3">
              <label class="form-label">Key Name</label>
              <input type="text" class="form-control" id="translationKeyName" name="translationKeyName" placeholder="Translation Key Name">
            </div>
            <?php

              $aSelectedLanguages = LogikBuild::getInstalledModules()[\LogikSuite\Translation\TranslationModule::class]["Languages"];
            foreach ($aSelectedLanguages as $sLocale => $aLanguage) {
                ?>
            <div class="mb-3">
              <label class="form-label" style="float:left;"><?php echo \LogikSuite\Translation\Locale::getLocaleName($sLocale); ?></label>
              <span class="dropdown" style="float:right;">
                              <button class="btn btn-sm dropdown-toggle align-text-top show" data-bs-boundary="viewport" data-bs-toggle="dropdown" aria-expanded="true">Translate from...</button>
                              <div class="dropdown-menu dropdown-menu-end show" data-popper-placement="bottom-end" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-81px, 38px);">
                                  <?php

                                    foreach ($aSelectedLanguages as $sTranslateLocale => $aTranslateLanguage) {
                                        if ($sTranslateLocale != $sLocale) {
                                            echo "<a class=\"dropdown-item\" href=\"javascript: LogikBuild.modules.Translation.translate('translationKeyValue_" . $sTranslateLocale . "','" . $sLocale . "');\">" . \LogikSuite\Translation\Locale::getLocaleName($sTranslateLocale)  . "</a>";
                                        }
                                    }

                                    ?>                                                                 
                              </div>
                            </span>
              <textarea class="form-control" id="translationKeyValue_<?php echo $sLocale; ?>" name="translationKeyValue_<?php echo $sLocale; ?>" placeholder="<?php echo \LogikSuite\Translation\Locale::getLocaleName($sLocale); ?>" style="height:90px;"></textarea>
            </div>
                  <?php
            }

            ?>
            <input type="hidden" id="translationFile" value=""/>
            <input type="hidden" id="translationLocales" value="{{ $selected_languages ?? '' }}"/>
          </div>
          <div class="modal-footer">            
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onClick="LogikBuild.modules.Translation.deleteTranslationKey();">Delete</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onClick="LogikBuild.modules.Translation.saveTranslationKey();">Save</button>            
          </div>
        </div>
      </div>
    </div>

    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
      <div id="toastDialog" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">         
          <strong class="me-auto" id="toastTitle"></strong>         
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" id="toastMessage">          
        </div>
      </div>
    </div>

       
    <!-- Tabler Core -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/logikbuild/assets/cryptojs/crypto.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/logikbuild/assets/@tabler/core/dist/js/tabler.min.js"></script>
    <script type="text/javascript" src="/logikbuild/assets/logikbuild/LogikBuild.js"></script>
    <script type="text/javascript" src="/logikbuild/assets/logikbuild/Developer.js"></script>
    <script type="text/javascript" src="/logikbuild/assets/logikbuild/Translation.js"></script>
    <script type="text/javascript">

      $(document).ready(function() {
        LogikBuild.initialize();
      });
  
    </script>

        
  </body>
</html>