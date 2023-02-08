<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
         <meta name="viewport" content="width=device-width,initial-scale=1"/><meta name="theme-color" content="#000000"/><meta name="description" content="OT&T is a premier African information technology consulting firm. We analyse, develop, and implement solutions using technology and information systems for our customers."/><link rel="apple-touch-icon" href="favicon.png"/><link rel="manifest" href="manifest.json"/><link rel="stylesheet" href="css/webfont.css"/>

        <title>OT&T</title>

            <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="asset/app.css">
        
        <!-- Google icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    </head>
    <body>
        <nav>
            <div class="nav-list" id="nav-list">
                <div class="simple-view-nav" id="simple-vaiew-nav">
                    <a href="">
                        <svg width="160" height="45" viewBox="0 0 160 45" fill="none" class="header-logo--large" xmlns="http://www.w3.org/2000/svg">
                            <path d="M97.4314 38.2866C97.1825 38.1155 96.8831 37.9794 96.5331 37.8783C96.191 37.7695 95.7982 37.715 95.3549 37.715C94.9349 37.715 94.5733 37.7811 94.27 37.9133C93.9745 38.0456 93.7334 38.2322 93.5467 38.4733C93.3601 38.7144 93.2201 39.006 93.1267 39.3482C93.0412 39.6826 92.9984 40.056 92.9984 40.4681C92.9984 41.4092 93.1967 42.1208 93.5934 42.603C93.9978 43.0852 94.5772 43.3263 95.3316 43.3263C95.7982 43.3263 96.2221 43.2563 96.6031 43.1163C96.992 42.9763 97.3109 42.8052 97.5597 42.603L97.9097 43.7579C97.5986 43.9445 97.2214 44.1117 96.7781 44.2595C96.3426 44.3995 95.8488 44.4695 95.2966 44.4695C94.6588 44.4695 94.1067 44.3645 93.64 44.1545C93.1734 43.9445 92.7845 43.6607 92.4735 43.3029C92.1701 42.9452 91.9446 42.533 91.7968 42.0664C91.6491 41.5919 91.5752 41.0903 91.5752 40.5615C91.5752 40.0093 91.6569 39.4921 91.8202 39.0099C91.9835 38.5277 92.2246 38.1078 92.5435 37.75C92.8701 37.3845 93.2706 37.0967 93.745 36.8868C94.2272 36.6768 94.7872 36.5718 95.4249 36.5718C95.8449 36.5718 96.2648 36.6184 96.6848 36.7118C97.1048 36.7973 97.4664 36.9179 97.7697 37.0734L97.4314 38.2866Z" fill="#CBBEA9"></path><path d="M102.497 36.5718C103.104 36.5718 103.64 36.6768 104.107 36.8868C104.574 37.0967 104.966 37.3845 105.285 37.75C105.604 38.1078 105.845 38.5238 106.008 38.9983C106.172 39.4727 106.253 39.9704 106.253 40.4915C106.253 41.0048 106.172 41.5025 106.008 41.9847C105.853 42.4591 105.612 42.883 105.285 43.2563C104.966 43.6218 104.566 43.9173 104.084 44.1429C103.609 44.3606 103.053 44.4695 102.415 44.4695C101.793 44.4695 101.253 44.3645 100.794 44.1545C100.335 43.9445 99.954 43.6607 99.6506 43.3029C99.3473 42.9452 99.1179 42.533 98.9624 42.0664C98.8146 41.5919 98.7407 41.0942 98.7407 40.5731C98.7407 40.021 98.8224 39.5038 98.9857 39.0216C99.1568 38.5316 99.4018 38.1078 99.7206 37.75C100.04 37.3845 100.432 37.0967 100.899 36.8868C101.366 36.6768 101.898 36.5718 102.497 36.5718ZM102.439 43.3263C102.867 43.3263 103.228 43.2563 103.524 43.1163C103.827 42.9685 104.076 42.7702 104.27 42.5213C104.465 42.2647 104.605 41.9652 104.69 41.6231C104.784 41.2809 104.83 40.9153 104.83 40.5265C104.83 40.1065 104.784 39.7254 104.69 39.3832C104.597 39.041 104.453 38.7455 104.259 38.4966C104.064 38.2478 103.815 38.0572 103.512 37.925C103.216 37.785 102.867 37.715 102.462 37.715C102.05 37.715 101.696 37.785 101.401 37.925C101.113 38.0572 100.876 38.2439 100.689 38.485C100.51 38.7261 100.378 39.0138 100.292 39.3482C100.214 39.6826 100.176 40.0521 100.176 40.4565C100.176 41.4053 100.37 42.1208 100.759 42.603C101.148 43.0852 101.708 43.3263 102.439 43.3263Z" fill="#CBBEA9"></path><path d="M112.882 42.288V36.6301H114.223V44.3295H112.579L109.195 38.6833V44.3295H107.854V36.6301H109.499L112.882 42.288Z" fill="#CBBEA9"></path><path d="M117.253 38.485C117.253 38.6483 117.288 38.7883 117.358 38.9049C117.435 39.0216 117.54 39.1227 117.673 39.2082C117.805 39.2938 117.96 39.3754 118.139 39.4532C118.326 39.5232 118.532 39.5971 118.758 39.6749C119.038 39.776 119.314 39.8926 119.586 40.0248C119.866 40.1493 120.115 40.3087 120.333 40.5031C120.558 40.6898 120.741 40.9231 120.881 41.2031C121.021 41.4831 121.091 41.8214 121.091 42.218C121.091 42.638 121.013 42.9918 120.857 43.2796C120.71 43.5673 120.507 43.8007 120.251 43.9795C119.994 44.1506 119.699 44.2751 119.364 44.3528C119.03 44.4306 118.684 44.4695 118.326 44.4695C117.813 44.4695 117.331 44.4073 116.879 44.2828C116.436 44.1584 116.055 44.0068 115.736 43.8279L116.086 42.568C116.382 42.7935 116.708 42.9802 117.066 43.1279C117.432 43.2757 117.848 43.3496 118.314 43.3496C118.812 43.3496 119.174 43.264 119.399 43.0929C119.625 42.9141 119.738 42.6769 119.738 42.3813C119.738 42.1558 119.683 41.9652 119.574 41.8097C119.465 41.6464 119.329 41.5103 119.166 41.4014C119.003 41.2847 118.828 41.1914 118.641 41.1214C118.462 41.0514 118.303 40.9931 118.163 40.9464C117.914 40.8687 117.661 40.7753 117.404 40.6665C117.148 40.5576 116.911 40.4176 116.693 40.2465C116.475 40.0676 116.296 39.846 116.156 39.5815C116.024 39.3171 115.958 38.9866 115.958 38.59C115.958 38.2166 116.02 37.9017 116.144 37.645C116.277 37.3884 116.452 37.1823 116.669 37.0267C116.895 36.8634 117.156 36.7468 117.451 36.6768C117.754 36.6068 118.081 36.5718 118.431 36.5718C118.859 36.5718 119.271 36.6146 119.668 36.7001C120.072 36.7856 120.41 36.8906 120.682 37.0151L120.367 38.2516C120.228 38.1583 120.076 38.0767 119.913 38.0067C119.749 37.9367 119.578 37.8783 119.399 37.8317C119.228 37.785 119.053 37.75 118.874 37.7267C118.703 37.6956 118.54 37.68 118.384 37.68C118.034 37.68 117.758 37.7461 117.556 37.8783C117.354 38.0106 117.253 38.2128 117.253 38.485Z" fill="#CBBEA9"></path><path d="M123.855 41.3431C123.855 42.0508 124.019 42.5602 124.345 42.8713C124.672 43.1746 125.127 43.3263 125.71 43.3263C126.294 43.3263 126.749 43.1746 127.075 42.8713C127.41 42.5602 127.577 42.0508 127.577 41.3431V36.6301H128.86V41.6231C128.86 42.0041 128.798 42.3658 128.673 42.708C128.549 43.0502 128.355 43.3535 128.09 43.6179C127.833 43.8745 127.499 44.0806 127.087 44.2362C126.682 44.3839 126.2 44.4578 125.64 44.4578C125.08 44.4578 124.602 44.3839 124.205 44.2362C123.809 44.0806 123.482 43.8745 123.226 43.6179C122.977 43.3535 122.794 43.0502 122.677 42.708C122.568 42.3658 122.514 42.0041 122.514 41.6231V36.6301H123.855V41.3431Z" fill="#CBBEA9"></path><path d="M132.162 43.1629H135.37V44.3295H130.821V36.6301H132.162V43.1629Z" fill="#CBBEA9"></path><path d="M140.941 37.7967H138.713V44.3295H137.371V37.7967H135.143V36.6301H140.941V37.7967Z" fill="#CBBEA9"></path><path d="M143.555 44.3295H142.213V36.6301H143.555V44.3295Z" fill="#CBBEA9"></path><path d="M150.636 42.288V36.6301H151.978V44.3295H150.333L146.95 38.6833V44.3295H145.608V36.6301H147.253L150.636 42.288Z" fill="#CBBEA9"></path><path d="M160 43.6879C159.65 43.9212 159.249 44.1117 158.798 44.2595C158.347 44.3995 157.853 44.4695 157.317 44.4695C156.671 44.4695 156.115 44.3645 155.649 44.1545C155.182 43.9445 154.793 43.6607 154.482 43.3029C154.179 42.9452 153.953 42.533 153.805 42.0664C153.658 41.5919 153.584 41.0903 153.584 40.5615C153.584 40.0093 153.665 39.4921 153.829 39.0099C153.992 38.5277 154.233 38.1078 154.552 37.75C154.879 37.3845 155.283 37.0967 155.765 36.8868C156.247 36.6768 156.811 36.5718 157.457 36.5718C157.892 36.5718 158.324 36.6184 158.752 36.7118C159.179 36.7973 159.561 36.9179 159.895 37.0734L159.522 38.2866C159.257 38.1311 158.95 37.9989 158.6 37.89C158.25 37.7734 157.853 37.715 157.41 37.715C156.967 37.715 156.59 37.7811 156.279 37.9133C155.975 38.0378 155.73 38.2205 155.544 38.4616C155.357 38.7027 155.221 38.9944 155.135 39.3366C155.05 39.671 155.007 40.0521 155.007 40.4798C155.007 42.3774 155.812 43.3263 157.422 43.3263C157.71 43.3263 157.939 43.3029 158.11 43.2563C158.281 43.2096 158.464 43.1552 158.658 43.0929V41.1564H160V43.6879Z" fill="#CBBEA9"></path><path d="M24.9518 4.32429C21.6249 1.66277 18.6307 1.33008 15.3038 1.33008C11.6442 1.33008 7.31919 1.99546 3.65959 6.32043C0.665381 9.98002 0 13.6396 0 16.3011C0 22.2895 2.99421 26.2818 5.98843 28.278C8.98264 30.2741 12.6422 30.9395 15.3038 30.9395C21.6249 30.9395 24.9518 28.6107 27.6133 25.2838C29.6094 22.6222 30.6075 19.2953 30.6075 16.6338C30.6075 10.6454 27.946 6.65312 24.9518 4.32429ZM15.6364 28.9433C12.3095 28.9433 6.32112 25.2838 6.32112 14.9704C6.32112 11.6435 7.65188 7.65119 9.98071 5.32236C12.3095 2.99353 14.3057 3.32622 15.3038 3.32622C18.6307 3.32622 24.2864 7.98388 24.2864 16.9665C24.2864 19.9607 22.9556 28.9433 15.6364 28.9433Z" fill="#CBBEA9"></path><path d="M52.5638 28.6113H51.2331C50.235 28.6113 49.9023 27.946 49.9023 26.9479C49.9023 26.2825 49.9023 15.3037 49.9023 14.6384V3.65959H51.2331C52.2311 3.65959 55.558 3.65959 56.5561 4.32497C57.5542 5.32304 59.2176 7.31918 59.883 8.64994C59.883 8.98263 60.2157 8.98263 60.2157 8.98263L61.2138 8.64994C61.2138 8.64994 61.5465 8.31725 61.2138 8.31725C60.8811 6.32111 60.2157 1.33076 59.883 0.33269C60.2157 0 60.2157 0 59.883 0C59.5503 0 59.2176 0.33269 58.8849 0.66538C58.5522 0.99807 56.8888 1.66345 55.8907 1.66345C54.2273 1.66345 52.5638 1.99614 48.2388 1.99614H45.91C41.9177 1.99614 39.9216 1.99614 37.9254 1.66345C36.5947 1.66345 35.5966 1.33076 35.2639 0.66538C34.9312 0 34.9312 0 34.5985 0C34.2658 0 34.2658 0 33.9332 0.66538C33.9332 1.33076 32.6024 6.6538 31.937 8.31725V8.64994L32.9351 8.98263C32.9351 8.98263 33.2678 8.98263 33.2678 8.64994C34.2658 7.31918 35.9293 4.65766 36.9274 3.99228C38.5908 3.3269 40.9197 3.3269 42.2504 3.3269H43.5812V13.3076C43.5812 13.973 43.5812 26.2825 43.5812 27.2806C43.5812 27.946 42.9158 28.6113 42.2504 28.6113H40.2543C39.9216 28.6113 39.9216 28.6113 39.9216 28.944V29.6094C39.9216 29.9421 39.9216 29.9421 40.2543 29.9421C40.9197 29.9421 42.5831 29.9421 46.5754 29.9421C50.9004 29.9421 52.2311 29.9421 52.5638 29.9421C52.8965 29.9421 52.8965 29.9421 52.8965 29.6094V28.944C52.8965 28.6113 52.8965 28.6113 52.5638 28.6113Z" fill="#CBBEA9"></path><path d="M111.451 0C111.119 0 110.786 0.33269 110.453 0.66538C110.121 0.99807 108.457 1.66345 107.459 1.66345C105.796 1.66345 104.132 1.99614 99.8072 1.99614H97.4783C93.4861 1.99614 91.4899 1.99614 89.4938 1.66345C88.163 1.66345 87.165 1.33076 86.8323 0.66538C86.4996 0.33269 86.4996 0 86.1669 0C85.8342 0 85.8342 0 85.5015 0.66538C85.5015 1.33076 84.1708 6.6538 83.5054 8.31725V8.64994L84.5034 8.98263C84.5034 8.98263 84.8361 8.98263 84.8361 8.64994C85.8342 7.31918 87.4977 4.65766 88.4957 3.99228C90.1592 3.3269 92.488 3.3269 93.8188 3.3269H95.1495V13.3076C95.1495 13.973 95.1495 26.2825 95.1495 27.2806C95.1495 27.946 94.4841 28.6113 93.8188 28.6113H91.8226C91.4899 28.6113 91.4899 28.6113 91.4899 28.944V29.6094C91.4899 29.9421 91.4899 29.9421 91.8226 29.9421C92.488 29.9421 94.1515 29.9421 98.1437 29.9421C102.469 29.9421 103.799 29.9421 104.132 29.9421C104.465 29.9421 104.465 29.9421 104.465 29.6094V28.944C104.465 28.6113 104.465 28.6113 104.132 28.6113H102.469C101.471 28.6113 101.138 27.946 101.138 26.9479C101.138 26.2825 101.138 15.3037 101.138 14.6384V3.65959H102.469C103.467 3.65959 106.794 3.65959 107.792 4.32497C108.79 5.32304 110.453 7.31918 111.119 8.64994C111.784 9.31532 112.117 9.31532 112.117 9.31532L113.115 8.98263C113.115 8.98263 113.115 8.95894 113.115 8.64994C112.782 6.6538 112.117 1.66345 111.784 0.66538C111.784 0 111.784 0 111.451 0Z" fill="#CBBEA9"></path><path d="M85.8337 25.6164C90.1587 24.951 92.8202 22.2895 92.8202 17.6318C92.8202 14.9703 90.8241 12.6415 86.8318 12.6415C84.8356 12.6415 83.1722 13.9722 83.1722 15.9684C83.1722 17.2991 84.1703 18.2972 85.501 18.2972C87.1645 18.2972 87.8299 16.6338 87.8299 15.6357C87.8299 15.303 87.8299 14.6376 88.4952 14.6376C89.826 14.6376 91.1568 16.3011 91.1568 17.6318C91.1568 20.2933 88.8279 21.6241 85.8337 21.6241C82.8395 21.6241 81.5087 21.2914 79.1799 21.2914C74.1896 21.2914 71.1954 24.6183 71.1954 28.2779C71.1954 32.2702 73.8569 33.9336 76.1857 33.9336C79.1799 33.9336 79.8453 32.6029 79.8453 30.9394C79.8453 29.6087 78.8472 28.6106 76.8511 28.6106C75.5203 28.6106 74.5223 30.274 74.8549 31.2721C74.8549 31.6048 74.5223 31.9375 74.5223 31.9375C74.1896 31.9375 73.1915 30.6067 73.1915 29.6087C73.1915 28.2779 73.8569 25.6164 77.8492 25.6164C82.1741 25.6164 84.503 28.6106 84.503 31.2721C84.503 35.9298 79.8453 39.922 71.528 39.922C63.2108 39.922 58.2205 36.5951 58.2205 30.9394C58.2205 28.6106 59.2185 26.2818 60.5493 24.951C61.2147 24.6183 61.2147 24.6183 61.5474 24.951C62.5454 25.6164 63.8762 26.2818 64.8743 26.2818C66.5377 26.2818 67.2031 25.2837 67.2031 23.9529C67.2031 22.2895 66.205 21.9568 64.8743 21.9568C63.5435 21.9568 62.5454 22.6222 61.88 22.6222C61.2147 21.6241 61.2147 20.2933 61.2147 19.628C61.2147 16.9664 63.5435 15.303 65.2069 15.303C67.2031 15.303 68.5338 16.6338 68.5338 18.2972C68.5338 18.9626 68.5338 19.2953 68.5338 19.2953C69.1992 19.2953 71.1954 18.2972 71.1954 15.9684C71.1954 12.6415 68.8665 10.978 65.8723 10.978C61.2147 10.978 58.5531 14.3049 58.5531 17.6318C58.5531 19.628 59.5512 21.6241 60.5493 23.2876C58.5531 24.2856 54.8936 27.2798 54.8936 32.9356C54.8936 37.5932 58.2205 44.9124 71.1954 44.9124C79.8453 44.9124 86.8318 40.2547 86.8318 32.2702C86.8318 29.6087 86.1664 27.9452 85.501 27.2798C85.1683 26.6144 84.8356 25.9491 85.8337 25.6164Z" fill="#CBBEA9"></path>
                        </svg>
                    </a>

                    <button type="button" id="close-nav">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </button>
                </div>
                <div class="sec-nav-list">
                    <ul>
                        <li>
                            <a href="">
                                Service
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Projects
                            </a>
                        </li>
                        <li>
                            <a href="">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="nav-caption">
                    <p>
                        <a href="">
                            Human Capital
                        </a>
                    </p>
                    <p>
                        <a href="">
                            Development
                        </a>
                    </p>
                    <p>
                        <a href="#">
                             Watch Video
                        </a>
                    </p>
                    <p>
                        <a href="">Contact Us</a>
                    </p>
                </div>
            </div>
            {{-- this green div is used for transistion between the navigation --}}
            {{-- <div class="green-show" id="green-slide-show"></div> --}}

            <div class="nav-wrapper" id="nav-wrapper">
                <div class="simple-view-nav" id="simple-vaiew-nav">
                    <a href="">
                        <svg width="160" height="45" viewBox="0 0 160 45" fill="none" class="header-logo--large" xmlns="http://www.w3.org/2000/svg">
                            <path d="M97.4314 38.2866C97.1825 38.1155 96.8831 37.9794 96.5331 37.8783C96.191 37.7695 95.7982 37.715 95.3549 37.715C94.9349 37.715 94.5733 37.7811 94.27 37.9133C93.9745 38.0456 93.7334 38.2322 93.5467 38.4733C93.3601 38.7144 93.2201 39.006 93.1267 39.3482C93.0412 39.6826 92.9984 40.056 92.9984 40.4681C92.9984 41.4092 93.1967 42.1208 93.5934 42.603C93.9978 43.0852 94.5772 43.3263 95.3316 43.3263C95.7982 43.3263 96.2221 43.2563 96.6031 43.1163C96.992 42.9763 97.3109 42.8052 97.5597 42.603L97.9097 43.7579C97.5986 43.9445 97.2214 44.1117 96.7781 44.2595C96.3426 44.3995 95.8488 44.4695 95.2966 44.4695C94.6588 44.4695 94.1067 44.3645 93.64 44.1545C93.1734 43.9445 92.7845 43.6607 92.4735 43.3029C92.1701 42.9452 91.9446 42.533 91.7968 42.0664C91.6491 41.5919 91.5752 41.0903 91.5752 40.5615C91.5752 40.0093 91.6569 39.4921 91.8202 39.0099C91.9835 38.5277 92.2246 38.1078 92.5435 37.75C92.8701 37.3845 93.2706 37.0967 93.745 36.8868C94.2272 36.6768 94.7872 36.5718 95.4249 36.5718C95.8449 36.5718 96.2648 36.6184 96.6848 36.7118C97.1048 36.7973 97.4664 36.9179 97.7697 37.0734L97.4314 38.2866Z" fill="#CBBEA9"></path><path d="M102.497 36.5718C103.104 36.5718 103.64 36.6768 104.107 36.8868C104.574 37.0967 104.966 37.3845 105.285 37.75C105.604 38.1078 105.845 38.5238 106.008 38.9983C106.172 39.4727 106.253 39.9704 106.253 40.4915C106.253 41.0048 106.172 41.5025 106.008 41.9847C105.853 42.4591 105.612 42.883 105.285 43.2563C104.966 43.6218 104.566 43.9173 104.084 44.1429C103.609 44.3606 103.053 44.4695 102.415 44.4695C101.793 44.4695 101.253 44.3645 100.794 44.1545C100.335 43.9445 99.954 43.6607 99.6506 43.3029C99.3473 42.9452 99.1179 42.533 98.9624 42.0664C98.8146 41.5919 98.7407 41.0942 98.7407 40.5731C98.7407 40.021 98.8224 39.5038 98.9857 39.0216C99.1568 38.5316 99.4018 38.1078 99.7206 37.75C100.04 37.3845 100.432 37.0967 100.899 36.8868C101.366 36.6768 101.898 36.5718 102.497 36.5718ZM102.439 43.3263C102.867 43.3263 103.228 43.2563 103.524 43.1163C103.827 42.9685 104.076 42.7702 104.27 42.5213C104.465 42.2647 104.605 41.9652 104.69 41.6231C104.784 41.2809 104.83 40.9153 104.83 40.5265C104.83 40.1065 104.784 39.7254 104.69 39.3832C104.597 39.041 104.453 38.7455 104.259 38.4966C104.064 38.2478 103.815 38.0572 103.512 37.925C103.216 37.785 102.867 37.715 102.462 37.715C102.05 37.715 101.696 37.785 101.401 37.925C101.113 38.0572 100.876 38.2439 100.689 38.485C100.51 38.7261 100.378 39.0138 100.292 39.3482C100.214 39.6826 100.176 40.0521 100.176 40.4565C100.176 41.4053 100.37 42.1208 100.759 42.603C101.148 43.0852 101.708 43.3263 102.439 43.3263Z" fill="#CBBEA9"></path><path d="M112.882 42.288V36.6301H114.223V44.3295H112.579L109.195 38.6833V44.3295H107.854V36.6301H109.499L112.882 42.288Z" fill="#CBBEA9"></path><path d="M117.253 38.485C117.253 38.6483 117.288 38.7883 117.358 38.9049C117.435 39.0216 117.54 39.1227 117.673 39.2082C117.805 39.2938 117.96 39.3754 118.139 39.4532C118.326 39.5232 118.532 39.5971 118.758 39.6749C119.038 39.776 119.314 39.8926 119.586 40.0248C119.866 40.1493 120.115 40.3087 120.333 40.5031C120.558 40.6898 120.741 40.9231 120.881 41.2031C121.021 41.4831 121.091 41.8214 121.091 42.218C121.091 42.638 121.013 42.9918 120.857 43.2796C120.71 43.5673 120.507 43.8007 120.251 43.9795C119.994 44.1506 119.699 44.2751 119.364 44.3528C119.03 44.4306 118.684 44.4695 118.326 44.4695C117.813 44.4695 117.331 44.4073 116.879 44.2828C116.436 44.1584 116.055 44.0068 115.736 43.8279L116.086 42.568C116.382 42.7935 116.708 42.9802 117.066 43.1279C117.432 43.2757 117.848 43.3496 118.314 43.3496C118.812 43.3496 119.174 43.264 119.399 43.0929C119.625 42.9141 119.738 42.6769 119.738 42.3813C119.738 42.1558 119.683 41.9652 119.574 41.8097C119.465 41.6464 119.329 41.5103 119.166 41.4014C119.003 41.2847 118.828 41.1914 118.641 41.1214C118.462 41.0514 118.303 40.9931 118.163 40.9464C117.914 40.8687 117.661 40.7753 117.404 40.6665C117.148 40.5576 116.911 40.4176 116.693 40.2465C116.475 40.0676 116.296 39.846 116.156 39.5815C116.024 39.3171 115.958 38.9866 115.958 38.59C115.958 38.2166 116.02 37.9017 116.144 37.645C116.277 37.3884 116.452 37.1823 116.669 37.0267C116.895 36.8634 117.156 36.7468 117.451 36.6768C117.754 36.6068 118.081 36.5718 118.431 36.5718C118.859 36.5718 119.271 36.6146 119.668 36.7001C120.072 36.7856 120.41 36.8906 120.682 37.0151L120.367 38.2516C120.228 38.1583 120.076 38.0767 119.913 38.0067C119.749 37.9367 119.578 37.8783 119.399 37.8317C119.228 37.785 119.053 37.75 118.874 37.7267C118.703 37.6956 118.54 37.68 118.384 37.68C118.034 37.68 117.758 37.7461 117.556 37.8783C117.354 38.0106 117.253 38.2128 117.253 38.485Z" fill="#CBBEA9"></path><path d="M123.855 41.3431C123.855 42.0508 124.019 42.5602 124.345 42.8713C124.672 43.1746 125.127 43.3263 125.71 43.3263C126.294 43.3263 126.749 43.1746 127.075 42.8713C127.41 42.5602 127.577 42.0508 127.577 41.3431V36.6301H128.86V41.6231C128.86 42.0041 128.798 42.3658 128.673 42.708C128.549 43.0502 128.355 43.3535 128.09 43.6179C127.833 43.8745 127.499 44.0806 127.087 44.2362C126.682 44.3839 126.2 44.4578 125.64 44.4578C125.08 44.4578 124.602 44.3839 124.205 44.2362C123.809 44.0806 123.482 43.8745 123.226 43.6179C122.977 43.3535 122.794 43.0502 122.677 42.708C122.568 42.3658 122.514 42.0041 122.514 41.6231V36.6301H123.855V41.3431Z" fill="#CBBEA9"></path><path d="M132.162 43.1629H135.37V44.3295H130.821V36.6301H132.162V43.1629Z" fill="#CBBEA9"></path><path d="M140.941 37.7967H138.713V44.3295H137.371V37.7967H135.143V36.6301H140.941V37.7967Z" fill="#CBBEA9"></path><path d="M143.555 44.3295H142.213V36.6301H143.555V44.3295Z" fill="#CBBEA9"></path><path d="M150.636 42.288V36.6301H151.978V44.3295H150.333L146.95 38.6833V44.3295H145.608V36.6301H147.253L150.636 42.288Z" fill="#CBBEA9"></path><path d="M160 43.6879C159.65 43.9212 159.249 44.1117 158.798 44.2595C158.347 44.3995 157.853 44.4695 157.317 44.4695C156.671 44.4695 156.115 44.3645 155.649 44.1545C155.182 43.9445 154.793 43.6607 154.482 43.3029C154.179 42.9452 153.953 42.533 153.805 42.0664C153.658 41.5919 153.584 41.0903 153.584 40.5615C153.584 40.0093 153.665 39.4921 153.829 39.0099C153.992 38.5277 154.233 38.1078 154.552 37.75C154.879 37.3845 155.283 37.0967 155.765 36.8868C156.247 36.6768 156.811 36.5718 157.457 36.5718C157.892 36.5718 158.324 36.6184 158.752 36.7118C159.179 36.7973 159.561 36.9179 159.895 37.0734L159.522 38.2866C159.257 38.1311 158.95 37.9989 158.6 37.89C158.25 37.7734 157.853 37.715 157.41 37.715C156.967 37.715 156.59 37.7811 156.279 37.9133C155.975 38.0378 155.73 38.2205 155.544 38.4616C155.357 38.7027 155.221 38.9944 155.135 39.3366C155.05 39.671 155.007 40.0521 155.007 40.4798C155.007 42.3774 155.812 43.3263 157.422 43.3263C157.71 43.3263 157.939 43.3029 158.11 43.2563C158.281 43.2096 158.464 43.1552 158.658 43.0929V41.1564H160V43.6879Z" fill="#CBBEA9"></path><path d="M24.9518 4.32429C21.6249 1.66277 18.6307 1.33008 15.3038 1.33008C11.6442 1.33008 7.31919 1.99546 3.65959 6.32043C0.665381 9.98002 0 13.6396 0 16.3011C0 22.2895 2.99421 26.2818 5.98843 28.278C8.98264 30.2741 12.6422 30.9395 15.3038 30.9395C21.6249 30.9395 24.9518 28.6107 27.6133 25.2838C29.6094 22.6222 30.6075 19.2953 30.6075 16.6338C30.6075 10.6454 27.946 6.65312 24.9518 4.32429ZM15.6364 28.9433C12.3095 28.9433 6.32112 25.2838 6.32112 14.9704C6.32112 11.6435 7.65188 7.65119 9.98071 5.32236C12.3095 2.99353 14.3057 3.32622 15.3038 3.32622C18.6307 3.32622 24.2864 7.98388 24.2864 16.9665C24.2864 19.9607 22.9556 28.9433 15.6364 28.9433Z" fill="#CBBEA9"></path><path d="M52.5638 28.6113H51.2331C50.235 28.6113 49.9023 27.946 49.9023 26.9479C49.9023 26.2825 49.9023 15.3037 49.9023 14.6384V3.65959H51.2331C52.2311 3.65959 55.558 3.65959 56.5561 4.32497C57.5542 5.32304 59.2176 7.31918 59.883 8.64994C59.883 8.98263 60.2157 8.98263 60.2157 8.98263L61.2138 8.64994C61.2138 8.64994 61.5465 8.31725 61.2138 8.31725C60.8811 6.32111 60.2157 1.33076 59.883 0.33269C60.2157 0 60.2157 0 59.883 0C59.5503 0 59.2176 0.33269 58.8849 0.66538C58.5522 0.99807 56.8888 1.66345 55.8907 1.66345C54.2273 1.66345 52.5638 1.99614 48.2388 1.99614H45.91C41.9177 1.99614 39.9216 1.99614 37.9254 1.66345C36.5947 1.66345 35.5966 1.33076 35.2639 0.66538C34.9312 0 34.9312 0 34.5985 0C34.2658 0 34.2658 0 33.9332 0.66538C33.9332 1.33076 32.6024 6.6538 31.937 8.31725V8.64994L32.9351 8.98263C32.9351 8.98263 33.2678 8.98263 33.2678 8.64994C34.2658 7.31918 35.9293 4.65766 36.9274 3.99228C38.5908 3.3269 40.9197 3.3269 42.2504 3.3269H43.5812V13.3076C43.5812 13.973 43.5812 26.2825 43.5812 27.2806C43.5812 27.946 42.9158 28.6113 42.2504 28.6113H40.2543C39.9216 28.6113 39.9216 28.6113 39.9216 28.944V29.6094C39.9216 29.9421 39.9216 29.9421 40.2543 29.9421C40.9197 29.9421 42.5831 29.9421 46.5754 29.9421C50.9004 29.9421 52.2311 29.9421 52.5638 29.9421C52.8965 29.9421 52.8965 29.9421 52.8965 29.6094V28.944C52.8965 28.6113 52.8965 28.6113 52.5638 28.6113Z" fill="#CBBEA9"></path><path d="M111.451 0C111.119 0 110.786 0.33269 110.453 0.66538C110.121 0.99807 108.457 1.66345 107.459 1.66345C105.796 1.66345 104.132 1.99614 99.8072 1.99614H97.4783C93.4861 1.99614 91.4899 1.99614 89.4938 1.66345C88.163 1.66345 87.165 1.33076 86.8323 0.66538C86.4996 0.33269 86.4996 0 86.1669 0C85.8342 0 85.8342 0 85.5015 0.66538C85.5015 1.33076 84.1708 6.6538 83.5054 8.31725V8.64994L84.5034 8.98263C84.5034 8.98263 84.8361 8.98263 84.8361 8.64994C85.8342 7.31918 87.4977 4.65766 88.4957 3.99228C90.1592 3.3269 92.488 3.3269 93.8188 3.3269H95.1495V13.3076C95.1495 13.973 95.1495 26.2825 95.1495 27.2806C95.1495 27.946 94.4841 28.6113 93.8188 28.6113H91.8226C91.4899 28.6113 91.4899 28.6113 91.4899 28.944V29.6094C91.4899 29.9421 91.4899 29.9421 91.8226 29.9421C92.488 29.9421 94.1515 29.9421 98.1437 29.9421C102.469 29.9421 103.799 29.9421 104.132 29.9421C104.465 29.9421 104.465 29.9421 104.465 29.6094V28.944C104.465 28.6113 104.465 28.6113 104.132 28.6113H102.469C101.471 28.6113 101.138 27.946 101.138 26.9479C101.138 26.2825 101.138 15.3037 101.138 14.6384V3.65959H102.469C103.467 3.65959 106.794 3.65959 107.792 4.32497C108.79 5.32304 110.453 7.31918 111.119 8.64994C111.784 9.31532 112.117 9.31532 112.117 9.31532L113.115 8.98263C113.115 8.98263 113.115 8.95894 113.115 8.64994C112.782 6.6538 112.117 1.66345 111.784 0.66538C111.784 0 111.784 0 111.451 0Z" fill="#CBBEA9"></path><path d="M85.8337 25.6164C90.1587 24.951 92.8202 22.2895 92.8202 17.6318C92.8202 14.9703 90.8241 12.6415 86.8318 12.6415C84.8356 12.6415 83.1722 13.9722 83.1722 15.9684C83.1722 17.2991 84.1703 18.2972 85.501 18.2972C87.1645 18.2972 87.8299 16.6338 87.8299 15.6357C87.8299 15.303 87.8299 14.6376 88.4952 14.6376C89.826 14.6376 91.1568 16.3011 91.1568 17.6318C91.1568 20.2933 88.8279 21.6241 85.8337 21.6241C82.8395 21.6241 81.5087 21.2914 79.1799 21.2914C74.1896 21.2914 71.1954 24.6183 71.1954 28.2779C71.1954 32.2702 73.8569 33.9336 76.1857 33.9336C79.1799 33.9336 79.8453 32.6029 79.8453 30.9394C79.8453 29.6087 78.8472 28.6106 76.8511 28.6106C75.5203 28.6106 74.5223 30.274 74.8549 31.2721C74.8549 31.6048 74.5223 31.9375 74.5223 31.9375C74.1896 31.9375 73.1915 30.6067 73.1915 29.6087C73.1915 28.2779 73.8569 25.6164 77.8492 25.6164C82.1741 25.6164 84.503 28.6106 84.503 31.2721C84.503 35.9298 79.8453 39.922 71.528 39.922C63.2108 39.922 58.2205 36.5951 58.2205 30.9394C58.2205 28.6106 59.2185 26.2818 60.5493 24.951C61.2147 24.6183 61.2147 24.6183 61.5474 24.951C62.5454 25.6164 63.8762 26.2818 64.8743 26.2818C66.5377 26.2818 67.2031 25.2837 67.2031 23.9529C67.2031 22.2895 66.205 21.9568 64.8743 21.9568C63.5435 21.9568 62.5454 22.6222 61.88 22.6222C61.2147 21.6241 61.2147 20.2933 61.2147 19.628C61.2147 16.9664 63.5435 15.303 65.2069 15.303C67.2031 15.303 68.5338 16.6338 68.5338 18.2972C68.5338 18.9626 68.5338 19.2953 68.5338 19.2953C69.1992 19.2953 71.1954 18.2972 71.1954 15.9684C71.1954 12.6415 68.8665 10.978 65.8723 10.978C61.2147 10.978 58.5531 14.3049 58.5531 17.6318C58.5531 19.628 59.5512 21.6241 60.5493 23.2876C58.5531 24.2856 54.8936 27.2798 54.8936 32.9356C54.8936 37.5932 58.2205 44.9124 71.1954 44.9124C79.8453 44.9124 86.8318 40.2547 86.8318 32.2702C86.8318 29.6087 86.1664 27.9452 85.501 27.2798C85.1683 26.6144 84.8356 25.9491 85.8337 25.6164Z" fill="#CBBEA9"></path>
                        </svg>
                    </a>
                    <button class="nav-btn" type="button" id="open-nav">
                        <svg width="52" height="51" viewBox="0 0 36 17" class="header-menu-icon" fill="none" xmlns="http://www.w3.org/2000/svg"><line x1="16" y1="8.5" x2="36" y2="8.5" stroke="#CBBEA9"></line><line y1="0.5" x2="36" y2="0.5" stroke="#CBBEA9"></line><line x1="7" y1="16.5" x2="36" y2="16.5" stroke="#CBBEA9"></line></svg>
                    </button>
                </div>
            </div>
        </nav>

        @yield('content')

        <section class="green-bg">
            <div class="footer-nav-wrapper">
                {{-- <div class="footer-nav-caption">
                    <p>
                        <a href="">
                            Human Capital
                        </a>
                    </p>
                    <p>
                        <a href="">
                            Development
                        </a>
                    </p>
                    <p>
                        <a href="#">
                            Watch Video
                        </a>
                    </p>
                    <p>
                        <a href="">Contact Us</a>
                    </p>
                </div> --}}
                <div class="year-sec">
                    <p>
                        © {{date("Y");}}. OT&T Consulting
                    </p>
                </div>
            </div>
        </section>
        <script src="asset/app.js"></script>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </body>
</html>