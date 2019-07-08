





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <link rel="dns-prefetch" href="https://github.githubassets.com">
  <link rel="dns-prefetch" href="https://avatars0.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars1.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars2.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars3.githubusercontent.com">
  <link rel="dns-prefetch" href="https://github-cloud.s3.amazonaws.com">
  <link rel="dns-prefetch" href="https://user-images.githubusercontent.com/">



  <link crossorigin="anonymous" media="all" integrity="sha512-dsqgdBtnWun6oxDg9q1xezEyITXQ8QsMdFm+JDoDk6Tzx9AEE1XcUEhWff/M2Jv85ucTVJCjp/2fGbh6Omtrgg==" rel="stylesheet" href="https://github.githubassets.com/assets/frameworks-41c2037bf12f1e46d8f08b88a04a8d8f.css" />
  <link crossorigin="anonymous" media="all" integrity="sha512-MRlTIqIyb8caK5+o8llXVntXovciHyAM4qE3kWU2S7SIjAPDxYp4mE0jQp4kP5UYegy+lG9y1I6VlsdzEjb5Qw==" rel="stylesheet" href="https://github.githubassets.com/assets/site-294181adec18ed639e160b96b45d17ac.css" />
    <link crossorigin="anonymous" media="all" integrity="sha512-F7QsD7eRtbcaRkxI95mmHRoeARq+FCu7KeSfSSdYuU3NMGz3kch4AjmTRuUHOGn1r0GJGsRO6Q0Egs2Qxq9dMg==" rel="stylesheet" href="https://github.githubassets.com/assets/github-b654f6ae18468ac7a5e7dbb98f3dcc4b.css" />
    
    
    
    

  <meta name="viewport" content="width=device-width">
  
  <title>wordpress-memcached/advanced-cache.php at master · christianc1/wordpress-memcached · GitHub</title>
    <meta name="description" content="WordPress with Memcached Docker Image. Contribute to christianc1/wordpress-memcached development by creating an account on GitHub.">
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
  <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
  <meta property="fb:app_id" content="1401488693436528">

    <meta name="twitter:image:src" content="https://avatars3.githubusercontent.com/u/5025568?s=400&amp;v=4" /><meta name="twitter:site" content="@github" /><meta name="twitter:card" content="summary" /><meta name="twitter:title" content="christianc1/wordpress-memcached" /><meta name="twitter:description" content="WordPress with Memcached Docker Image. Contribute to christianc1/wordpress-memcached development by creating an account on GitHub." />
    <meta property="og:image" content="https://avatars3.githubusercontent.com/u/5025568?s=400&amp;v=4" /><meta property="og:site_name" content="GitHub" /><meta property="og:type" content="object" /><meta property="og:title" content="christianc1/wordpress-memcached" /><meta property="og:url" content="https://github.com/christianc1/wordpress-memcached" /><meta property="og:description" content="WordPress with Memcached Docker Image. Contribute to christianc1/wordpress-memcached development by creating an account on GitHub." />

  <link rel="assets" href="https://github.githubassets.com/">
  
  <meta name="pjax-timeout" content="1000">
  
  <meta name="request-id" content="A70D:7208:10F185:17F404:5D035848" data-pjax-transient>


  

  <meta name="selected-link" value="repo_source" data-pjax-transient>

      <meta name="google-site-verification" content="KT5gs8h0wvaagLKAVWq8bbeNwnZZK1r1XQysX3xurLU">
    <meta name="google-site-verification" content="ZzhVyEFwb7w3e0-uOTltm8Jsck2F5StVihD0exw2fsA">
    <meta name="google-site-verification" content="GXs5KoUUkNCoaAZn7wPN-t01Pywp9M3sEjnt_3_ZWPc">

  <meta name="octolytics-host" content="collector.githubapp.com" /><meta name="octolytics-app-id" content="github" /><meta name="octolytics-event-url" content="https://collector.githubapp.com/github-external/browser_event" /><meta name="octolytics-dimension-request_id" content="A70D:7208:10F185:17F404:5D035848" /><meta name="octolytics-dimension-region_edge" content="ap-southeast-1" /><meta name="octolytics-dimension-region_render" content="iad" />
<meta name="analytics-location" content="/&lt;user-name&gt;/&lt;repo-name&gt;/blob/show" data-pjax-transient="true" />



    <meta name="google-analytics" content="UA-3769691-2">


<meta class="js-ga-set" name="dimension1" content="Logged Out">



  

      <meta name="hostname" content="github.com">
    <meta name="user-login" content="">

      <meta name="expected-hostname" content="github.com">
    <meta name="js-proxy-site-detection-payload" content="OGRiYzE3MzJkNzU4YWY0MDgwNjk5OWU0MjE3ZjJkN2M3ZWZkYzdkMjE4ZDhmODY3NGFjYjRkMDQ3NmYxZTAwMXx7InJlbW90ZV9hZGRyZXNzIjoiMTAzLjI0OC4xNjQuMTQiLCJyZXF1ZXN0X2lkIjoiQTcwRDo3MjA4OjEwRjE4NToxN0Y0MDQ6NUQwMzU4NDgiLCJ0aW1lc3RhbXAiOjE1NjA1MDAzMTQsImhvc3QiOiJnaXRodWIuY29tIn0=">

    <meta name="enabled-features" content="UNIVERSE_BANNER,MARKETPLACE_INVOICED_BILLING,MARKETPLACE_SOCIAL_PROOF_CUSTOMERS,MARKETPLACE_TRENDING_SOCIAL_PROOF,MARKETPLACE_RECOMMENDATIONS">

  <meta name="html-safe-nonce" content="0454a96bdbadbef5bbc50e7e0d1682a188351c85">

  <meta http-equiv="x-pjax-version" content="9344490226e683adf112dea16bfb698c">
  

      <link href="https://github.com/christianc1/wordpress-memcached/commits/master.atom" rel="alternate" title="Recent Commits to wordpress-memcached:master" type="application/atom+xml">

  <meta name="go-import" content="github.com/christianc1/wordpress-memcached git https://github.com/christianc1/wordpress-memcached.git">

  <meta name="octolytics-dimension-user_id" content="5025568" /><meta name="octolytics-dimension-user_login" content="christianc1" /><meta name="octolytics-dimension-repository_id" content="77070505" /><meta name="octolytics-dimension-repository_nwo" content="christianc1/wordpress-memcached" /><meta name="octolytics-dimension-repository_public" content="true" /><meta name="octolytics-dimension-repository_is_fork" content="false" /><meta name="octolytics-dimension-repository_network_root_id" content="77070505" /><meta name="octolytics-dimension-repository_network_root_nwo" content="christianc1/wordpress-memcached" /><meta name="octolytics-dimension-repository_explore_github_marketplace_ci_cta_shown" content="false" />


    <link rel="canonical" href="https://github.com/christianc1/wordpress-memcached/blob/master/wp-content/advanced-cache.php" data-pjax-transient>


  <meta name="browser-stats-url" content="https://api.github.com/_private/browser/stats">

  <meta name="browser-errors-url" content="https://api.github.com/_private/browser/errors">

  <link rel="mask-icon" href="https://github.githubassets.com/pinned-octocat.svg" color="#000000">
  <link rel="icon" type="image/x-icon" class="js-site-favicon" href="https://github.githubassets.com/favicon.ico">

<meta name="theme-color" content="#1e2327">





  <link rel="manifest" href="/manifest.json" crossOrigin="use-credentials">

  </head>

  <body class="logged-out env-production page-responsive page-blob">
    

  <div class="position-relative js-header-wrapper ">
    <a href="#start-of-content" tabindex="1" class="px-2 py-4 bg-blue text-white show-on-focus js-skip-to-content">Skip to content</a>
    <div id="js-pjax-loader-bar" class="pjax-loader-bar"><div class="progress"></div></div>

    
    
    


        <header class="Header-old header-logged-out js-details-container Details position-relative f4 py-2" role="banner">
  <div class="container-lg d-lg-flex flex-items-center p-responsive">
    <div class="d-flex flex-justify-between flex-items-center">
        <a class="mr-4" href="https://github.com/" aria-label="Homepage" data-ga-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
          <svg height="32" class="octicon octicon-mark-github text-white" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"/></svg>
        </a>

          <div class="d-lg-none css-truncate css-truncate-target width-fit p-2">
            
              <svg class="octicon octicon-repo" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"/></svg>
    <a class="Header-link" href="/christianc1">christianc1</a>
    /
    <a class="Header-link" href="/christianc1/wordpress-memcached">wordpress-memcached</a>


          </div>

        <div class="d-flex flex-items-center">
            <a href="/join?source=header-repo"
              class="d-inline-block d-lg-none f5 text-white no-underline border border-gray-dark rounded-2 px-2 py-1 mr-3 mr-sm-5"
              data-hydro-click="{&quot;event_type&quot;:&quot;authentication.click&quot;,&quot;payload&quot;:{&quot;location_in_page&quot;:&quot;site header&quot;,&quot;repository_id&quot;:null,&quot;auth_type&quot;:&quot;SIGN_UP&quot;,&quot;client_id&quot;:&quot;441500614.1532340764&quot;,&quot;originating_request_id&quot;:&quot;A70D:7208:10F185:17F404:5D035848&quot;,&quot;originating_url&quot;:&quot;https://github.com/christianc1/wordpress-memcached/blob/master/wp-content/advanced-cache.php&quot;,&quot;referrer&quot;:&quot;https://github.com/christianc1/wordpress-memcached/tree/master/wp-content&quot;,&quot;user_id&quot;:null}}" data-hydro-click-hmac="3c7822a20603847c872ca57b3cdde92a3d8cb816bbd6f3a2467149c8cf7ddb09"
              data-ga-click="(Logged out) Header, clicked Sign up, text:sign-up">
              Sign&nbsp;up
            </a>

          <button class="btn-link d-lg-none mt-1 js-details-target" type="button" aria-label="Toggle navigation" aria-expanded="false">
            <svg height="24" class="octicon octicon-three-bars text-white" viewBox="0 0 12 16" version="1.1" width="18" aria-hidden="true"><path fill-rule="evenodd" d="M11.41 9H.59C0 9 0 8.59 0 8c0-.59 0-1 .59-1H11.4c.59 0 .59.41.59 1 0 .59 0 1-.59 1h.01zm0-4H.59C0 5 0 4.59 0 4c0-.59 0-1 .59-1H11.4c.59 0 .59.41.59 1 0 .59 0 1-.59 1h.01zM.59 11H11.4c.59 0 .59.41.59 1 0 .59 0 1-.59 1H.59C0 13 0 12.59 0 12c0-.59 0-1 .59-1z"/></svg>
          </button>
        </div>
    </div>

    <div class="HeaderMenu HeaderMenu--logged-out position-fixed top-0 right-0 bottom-0 height-fit position-lg-relative d-lg-flex flex-justify-between flex-items-center flex-auto">
      <div class="d-flex d-lg-none flex-justify-end border-bottom bg-gray-light p-3">
        <button class="btn-link js-details-target" type="button" aria-label="Toggle navigation" aria-expanded="false">
          <svg height="24" class="octicon octicon-x text-gray" viewBox="0 0 12 16" version="1.1" width="18" aria-hidden="true"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg>
        </button>
      </div>

        <nav class="mt-0 px-3 px-lg-0 mb-5 mb-lg-0" aria-label="Global">
          <ul class="d-lg-flex list-style-none">
              <li class="d-block d-lg-flex flex-lg-nowrap flex-lg-items-center border-bottom border-lg-bottom-0 mr-0 mr-lg-3 edge-item-fix position-relative flex-wrap flex-justify-between d-flex flex-items-center ">
                <details class="HeaderMenu-details details-overlay details-reset width-full">
                  <summary class="HeaderMenu-summary HeaderMenu-link px-0 py-3 border-0 no-wrap d-block d-lg-inline-block">
                    Why GitHub?
                    <svg x="0px" y="0px" viewBox="0 0 14 8" xml:space="preserve" fill="none" class="icon-chevon-down-mktg position-absolute position-lg-relative">
                      <path d="M1,1l6.2,6L13,1"></path>
                    </svg>
                  </summary>
                  <div class="dropdown-menu flex-auto rounded-1 bg-white px-0 mt-0 pb-4 p-lg-4 position-relative position-lg-absolute left-0 left-lg-n4">
                    <a href="/features" class="py-2 lh-condensed-ultra d-block link-gray-dark no-underline h5 Bump-link--hover" data-ga-click="(Logged out) Header, go to Features">Features <span class="Bump-link-symbol float-right text-normal text-gray-light">&rarr;</span></a>
                    <ul class="list-style-none f5 pb-3">
                      <li class="edge-item-fix"><a href="/features/code-review/" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Code review">Code review</a></li>
                      <li class="edge-item-fix"><a href="/features/project-management/" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Project management">Project management</a></li>
                      <li class="edge-item-fix"><a href="/features/integrations" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Integrations">Integrations</a></li>
                      <li class="edge-item-fix"><a href="/features/actions" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Actions">Actions</a>
                          <li class="edge-item-fix"><a href="/features/package-registry" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Package Registry">Package registry</a>
                      <li class="edge-item-fix"><a href="/features#team-management" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Team management">Team management</a></li>
                      <li class="edge-item-fix"><a href="/features#social-coding" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Social coding">Social coding</a></li>
                      <li class="edge-item-fix"><a href="/features#documentation" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Documentation">Documentation</a></li>
                      <li class="edge-item-fix"><a href="/features#code-hosting" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Code hosting">Code hosting</a></li>
                    </ul>

                    <ul class="list-style-none mb-0 border-lg-top pt-lg-3">
                      <li class="edge-item-fix"><a href="/customer-stories" class="py-2 lh-condensed-ultra d-block no-underline link-gray-dark no-underline h5 Bump-link--hover" data-ga-click="(Logged out) Header, go to Customer stories">Customer stories <span class="Bump-link-symbol float-right text-normal text-gray-light">&rarr;</span></a></li>
                      <li class="edge-item-fix"><a href="/security" class="py-2 lh-condensed-ultra d-block no-underline link-gray-dark no-underline h5 Bump-link--hover" data-ga-click="(Logged out) Header, go to Security">Security <span class="Bump-link-symbol float-right text-normal text-gray-light">&rarr;</span></a></li>
                    </ul>
                  </div>
                </details>
              </li>
              <li class="border-bottom border-lg-bottom-0 mr-0 mr-lg-3">
                <a href="/enterprise" class="HeaderMenu-link no-underline py-3 d-block d-lg-inline-block" data-ga-click="(Logged out) Header, go to Enterprise">Enterprise</a>
              </li>

              <li class="d-block d-lg-flex flex-lg-nowrap flex-lg-items-center border-bottom border-lg-bottom-0 mr-0 mr-lg-3 edge-item-fix position-relative flex-wrap flex-justify-between d-flex flex-items-center ">
                <details class="HeaderMenu-details details-overlay details-reset width-full">
                  <summary class="HeaderMenu-summary HeaderMenu-link px-0 py-3 border-0 no-wrap d-block d-lg-inline-block">
                    Explore
                    <svg x="0px" y="0px" viewBox="0 0 14 8" xml:space="preserve" fill="none" class="icon-chevon-down-mktg position-absolute position-lg-relative">
                      <path d="M1,1l6.2,6L13,1"></path>
                    </svg>
                  </summary>

                  <div class="dropdown-menu flex-auto rounded-1 bg-white px-0 pt-2 pb-0 mt-0 pb-4 p-lg-4 position-relative position-lg-absolute left-0 left-lg-n4">
                    <ul class="list-style-none mb-3">
                      <li class="edge-item-fix"><a href="/explore" class="py-2 lh-condensed-ultra d-block link-gray-dark no-underline h5 Bump-link--hover" data-ga-click="(Logged out) Header, go to Explore">Explore GitHub <span class="Bump-link-symbol float-right text-normal text-gray-light">&rarr;</span></a></li>
                    </ul>

                    <h4 class="text-gray-light text-normal text-mono f5 mb-2 border-lg-top pt-lg-3">Learn &amp; contribute</h4>
                    <ul class="list-style-none mb-3">
                      <li class="edge-item-fix"><a href="/topics" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Topics">Topics</a></li>
                        <li class="edge-item-fix"><a href="/collections" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Collections">Collections</a></li>
                      <li class="edge-item-fix"><a href="/trending" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Trending">Trending</a></li>
                      <li class="edge-item-fix"><a href="https://lab.github.com/" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Learning lab">Learning Lab</a></li>
                      <li class="edge-item-fix"><a href="https://opensource.guide" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Open source guides">Open source guides</a></li>
                    </ul>

                    <h4 class="text-gray-light text-normal text-mono f5 mb-2 border-lg-top pt-lg-3">Connect with others</h4>
                    <ul class="list-style-none mb-0">
                      <li class="edge-item-fix"><a href="https://github.com/events" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Events">Events</a></li>
                      <li class="edge-item-fix"><a href="https://github.community" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Community forum">Community forum</a></li>
                      <li class="edge-item-fix"><a href="https://education.github.com" class="py-2 pb-0 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to GitHub Education">GitHub Education</a></li>
                    </ul>
                  </div>
                </details>
              </li>

              <li class="border-bottom border-lg-bottom-0 mr-0 mr-lg-3">
                <a href="/marketplace" class="HeaderMenu-link no-underline py-3 d-block d-lg-inline-block" data-ga-click="(Logged out) Header, go to Marketplace">Marketplace</a>
              </li>

              <li class="d-block d-lg-flex flex-lg-nowrap flex-lg-items-center border-bottom border-lg-bottom-0 mr-0 mr-lg-3 edge-item-fix position-relative flex-wrap flex-justify-between d-flex flex-items-center ">
                <details class="HeaderMenu-details details-overlay details-reset width-full">
                  <summary class="HeaderMenu-summary HeaderMenu-link px-0 py-3 border-0 no-wrap d-block d-lg-inline-block">
                    Pricing
                    <svg x="0px" y="0px" viewBox="0 0 14 8" xml:space="preserve" fill="none" class="icon-chevon-down-mktg position-absolute position-lg-relative">
                       <path d="M1,1l6.2,6L13,1"></path>
                    </svg>
                  </summary>

                  <div class="dropdown-menu flex-auto rounded-1 bg-white px-0 pt-2 pb-4 mt-0 p-lg-4 position-relative position-lg-absolute left-0 left-lg-n4">
                    <a href="/pricing" class="pb-2 lh-condensed-ultra d-block link-gray-dark no-underline h5 Bump-link--hover" data-ga-click="(Logged out) Header, go to Pricing">Plans <span class="Bump-link-symbol float-right text-normal text-gray-light">&rarr;</span></a>

                    <ul class="list-style-none mb-3">
                      <li class="edge-item-fix"><a href="/pricing#feature-comparison" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Compare plans">Compare plans</a></li>
                      <li class="edge-item-fix"><a href="https://enterprise.github.com/contact" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Contact Sales">Contact Sales</a></li>
                    </ul>

                    <ul class="list-style-none mb-0 border-lg-top pt-lg-3">
                      <li class="edge-item-fix"><a href="/nonprofit" class="py-2 lh-condensed-ultra d-block no-underline link-gray-dark no-underline h5 Bump-link--hover" data-ga-click="(Logged out) Header, go to Nonprofits">Nonprofit <span class="Bump-link-symbol float-right text-normal text-gray-light">&rarr;</span></a></li>
                      <li class="edge-item-fix"><a href="https://education.github.com" class="py-2 pb-0 lh-condensed-ultra d-block no-underline link-gray-dark no-underline h5 Bump-link--hover"  data-ga-click="(Logged out) Header, go to Education">Education <span class="Bump-link-symbol float-right text-normal text-gray-light">&rarr;</span></a></li>
                    </ul>
                  </div>
                </details>
              </li>
          </ul>
        </nav>

      <div class="d-lg-flex flex-items-center px-3 px-lg-0 text-center text-lg-left">
          <div class="d-lg-flex mb-3 mb-lg-0">
            <div class="header-search flex-self-stretch flex-lg-self-auto mr-0 mr-lg-3 mb-3 mb-lg-0 scoped-search site-scoped-search js-site-search position-relative js-jump-to"
  role="combobox"
  aria-owns="jump-to-results"
  aria-label="Search or jump to"
  aria-haspopup="listbox"
  aria-expanded="false"
>
  <div class="position-relative">
    <!-- '"` --><!-- </textarea></xmp> --></option></form><form class="js-site-search-form" role="search" aria-label="Site" data-scope-type="Repository" data-scope-id="77070505" data-scoped-search-url="/christianc1/wordpress-memcached/search" data-unscoped-search-url="/search" action="/christianc1/wordpress-memcached/search" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="&#x2713;" />
      <label class="form-control input-sm header-search-wrapper p-0 header-search-wrapper-jump-to position-relative d-flex flex-justify-between flex-items-center js-chromeless-input-container">
        <input type="text"
          class="form-control input-sm header-search-input jump-to-field js-jump-to-field js-site-search-focus js-site-search-field is-clearable"
          data-hotkey="s,/"
          name="q"
          value=""
          placeholder="Search"
          data-unscoped-placeholder="Search GitHub"
          data-scoped-placeholder="Search"
          autocapitalize="off"
          aria-autocomplete="list"
          aria-controls="jump-to-results"
          aria-label="Search"
          data-jump-to-suggestions-path="/_graphql/GetSuggestedNavigationDestinations#csrf-token=DX13DPFRTU8IRbNtCWF7V9o+CTBFZ+qWPJ4Ws81JWIvIzCDXtzWtr1/vqKOkt3Vk95dYfRdAVzrMxkTE7CNQ9A=="
          spellcheck="false"
          autocomplete="off"
          >
          <input type="hidden" class="js-site-search-type-field" name="type" >
            <img src="https://github.githubassets.com/images/search-key-slash.svg" alt="" class="mr-2 header-search-key-slash">

            <div class="Box position-absolute overflow-hidden d-none jump-to-suggestions js-jump-to-suggestions-container">
              
<ul class="d-none js-jump-to-suggestions-template-container">
  

<li class="d-flex flex-justify-start flex-items-center p-0 f5 navigation-item js-navigation-item js-jump-to-suggestion" role="option">
  <a tabindex="-1" class="no-underline d-flex flex-auto flex-items-center jump-to-suggestions-path js-jump-to-suggestion-path js-navigation-open p-2" href="">
    <div class="jump-to-octicon js-jump-to-octicon flex-shrink-0 mr-2 text-center d-none">
      <svg height="16" width="16" class="octicon octicon-repo flex-shrink-0 js-jump-to-octicon-repo d-none" title="Repository" aria-label="Repository" viewBox="0 0 12 16" version="1.1" role="img"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"/></svg>
      <svg height="16" width="16" class="octicon octicon-project flex-shrink-0 js-jump-to-octicon-project d-none" title="Project" aria-label="Project" viewBox="0 0 15 16" version="1.1" role="img"><path fill-rule="evenodd" d="M10 12h3V2h-3v10zm-4-2h3V2H6v8zm-4 4h3V2H2v12zm-1 1h13V1H1v14zM14 0H1a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z"/></svg>
      <svg height="16" width="16" class="octicon octicon-search flex-shrink-0 js-jump-to-octicon-search d-none" title="Search" aria-label="Search" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M15.7 13.3l-3.81-3.83A5.93 5.93 0 0 0 13 6c0-3.31-2.69-6-6-6S1 2.69 1 6s2.69 6 6 6c1.3 0 2.48-.41 3.47-1.11l3.83 3.81c.19.2.45.3.7.3.25 0 .52-.09.7-.3a.996.996 0 0 0 0-1.41v.01zM7 10.7c-2.59 0-4.7-2.11-4.7-4.7 0-2.59 2.11-4.7 4.7-4.7 2.59 0 4.7 2.11 4.7 4.7 0 2.59-2.11 4.7-4.7 4.7z"/></svg>
    </div>

    <img class="avatar mr-2 flex-shrink-0 js-jump-to-suggestion-avatar d-none" alt="" aria-label="Team" src="" width="28" height="28">

    <div class="jump-to-suggestion-name js-jump-to-suggestion-name flex-auto overflow-hidden text-left no-wrap css-truncate css-truncate-target">
    </div>

    <div class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none js-jump-to-badge-search">
      <span class="js-jump-to-badge-search-text-default d-none" aria-label="in this repository">
        In this repository
      </span>
      <span class="js-jump-to-badge-search-text-global d-none" aria-label="in all of GitHub">
        All GitHub
      </span>
      <span aria-hidden="true" class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>

    <div aria-hidden="true" class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none d-on-nav-focus js-jump-to-badge-jump">
      Jump to
      <span class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>
  </a>
</li>

</ul>

<ul class="d-none js-jump-to-no-results-template-container">
  <li class="d-flex flex-justify-center flex-items-center f5 d-none js-jump-to-suggestion p-2">
    <span class="text-gray">No suggested jump to results</span>
  </li>
</ul>

<ul id="jump-to-results" role="listbox" class="p-0 m-0 js-navigation-container jump-to-suggestions-results-container js-jump-to-suggestions-results-container">
  

<li class="d-flex flex-justify-start flex-items-center p-0 f5 navigation-item js-navigation-item js-jump-to-scoped-search d-none" role="option">
  <a tabindex="-1" class="no-underline d-flex flex-auto flex-items-center jump-to-suggestions-path js-jump-to-suggestion-path js-navigation-open p-2" href="">
    <div class="jump-to-octicon js-jump-to-octicon flex-shrink-0 mr-2 text-center d-none">
      <svg height="16" width="16" class="octicon octicon-repo flex-shrink-0 js-jump-to-octicon-repo d-none" title="Repository" aria-label="Repository" viewBox="0 0 12 16" version="1.1" role="img"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"/></svg>
      <svg height="16" width="16" class="octicon octicon-project flex-shrink-0 js-jump-to-octicon-project d-none" title="Project" aria-label="Project" viewBox="0 0 15 16" version="1.1" role="img"><path fill-rule="evenodd" d="M10 12h3V2h-3v10zm-4-2h3V2H6v8zm-4 4h3V2H2v12zm-1 1h13V1H1v14zM14 0H1a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z"/></svg>
      <svg height="16" width="16" class="octicon octicon-search flex-shrink-0 js-jump-to-octicon-search d-none" title="Search" aria-label="Search" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M15.7 13.3l-3.81-3.83A5.93 5.93 0 0 0 13 6c0-3.31-2.69-6-6-6S1 2.69 1 6s2.69 6 6 6c1.3 0 2.48-.41 3.47-1.11l3.83 3.81c.19.2.45.3.7.3.25 0 .52-.09.7-.3a.996.996 0 0 0 0-1.41v.01zM7 10.7c-2.59 0-4.7-2.11-4.7-4.7 0-2.59 2.11-4.7 4.7-4.7 2.59 0 4.7 2.11 4.7 4.7 0 2.59-2.11 4.7-4.7 4.7z"/></svg>
    </div>

    <img class="avatar mr-2 flex-shrink-0 js-jump-to-suggestion-avatar d-none" alt="" aria-label="Team" src="" width="28" height="28">

    <div class="jump-to-suggestion-name js-jump-to-suggestion-name flex-auto overflow-hidden text-left no-wrap css-truncate css-truncate-target">
    </div>

    <div class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none js-jump-to-badge-search">
      <span class="js-jump-to-badge-search-text-default d-none" aria-label="in this repository">
        In this repository
      </span>
      <span class="js-jump-to-badge-search-text-global d-none" aria-label="in all of GitHub">
        All GitHub
      </span>
      <span aria-hidden="true" class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>

    <div aria-hidden="true" class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none d-on-nav-focus js-jump-to-badge-jump">
      Jump to
      <span class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>
  </a>
</li>

  

<li class="d-flex flex-justify-start flex-items-center p-0 f5 navigation-item js-navigation-item js-jump-to-global-search d-none" role="option">
  <a tabindex="-1" class="no-underline d-flex flex-auto flex-items-center jump-to-suggestions-path js-jump-to-suggestion-path js-navigation-open p-2" href="">
    <div class="jump-to-octicon js-jump-to-octicon flex-shrink-0 mr-2 text-center d-none">
      <svg height="16" width="16" class="octicon octicon-repo flex-shrink-0 js-jump-to-octicon-repo d-none" title="Repository" aria-label="Repository" viewBox="0 0 12 16" version="1.1" role="img"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"/></svg>
      <svg height="16" width="16" class="octicon octicon-project flex-shrink-0 js-jump-to-octicon-project d-none" title="Project" aria-label="Project" viewBox="0 0 15 16" version="1.1" role="img"><path fill-rule="evenodd" d="M10 12h3V2h-3v10zm-4-2h3V2H6v8zm-4 4h3V2H2v12zm-1 1h13V1H1v14zM14 0H1a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z"/></svg>
      <svg height="16" width="16" class="octicon octicon-search flex-shrink-0 js-jump-to-octicon-search d-none" title="Search" aria-label="Search" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M15.7 13.3l-3.81-3.83A5.93 5.93 0 0 0 13 6c0-3.31-2.69-6-6-6S1 2.69 1 6s2.69 6 6 6c1.3 0 2.48-.41 3.47-1.11l3.83 3.81c.19.2.45.3.7.3.25 0 .52-.09.7-.3a.996.996 0 0 0 0-1.41v.01zM7 10.7c-2.59 0-4.7-2.11-4.7-4.7 0-2.59 2.11-4.7 4.7-4.7 2.59 0 4.7 2.11 4.7 4.7 0 2.59-2.11 4.7-4.7 4.7z"/></svg>
    </div>

    <img class="avatar mr-2 flex-shrink-0 js-jump-to-suggestion-avatar d-none" alt="" aria-label="Team" src="" width="28" height="28">

    <div class="jump-to-suggestion-name js-jump-to-suggestion-name flex-auto overflow-hidden text-left no-wrap css-truncate css-truncate-target">
    </div>

    <div class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none js-jump-to-badge-search">
      <span class="js-jump-to-badge-search-text-default d-none" aria-label="in this repository">
        In this repository
      </span>
      <span class="js-jump-to-badge-search-text-global d-none" aria-label="in all of GitHub">
        All GitHub
      </span>
      <span aria-hidden="true" class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>

    <div aria-hidden="true" class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none d-on-nav-focus js-jump-to-badge-jump">
      Jump to
      <span class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>
  </a>
</li>


</ul>

            </div>
      </label>
</form>  </div>
</div>

          </div>

        <a href="/login?return_to=%2Fchristianc1%2Fwordpress-memcached%2Fblob%2Fmaster%2Fwp-content%2Fadvanced-cache.php"
          class="HeaderMenu-link no-underline mr-3"
          data-hydro-click="{&quot;event_type&quot;:&quot;authentication.click&quot;,&quot;payload&quot;:{&quot;location_in_page&quot;:&quot;site header menu&quot;,&quot;repository_id&quot;:null,&quot;auth_type&quot;:&quot;SIGN_UP&quot;,&quot;client_id&quot;:&quot;441500614.1532340764&quot;,&quot;originating_request_id&quot;:&quot;A70D:7208:10F185:17F404:5D035848&quot;,&quot;originating_url&quot;:&quot;https://github.com/christianc1/wordpress-memcached/blob/master/wp-content/advanced-cache.php&quot;,&quot;referrer&quot;:&quot;https://github.com/christianc1/wordpress-memcached/tree/master/wp-content&quot;,&quot;user_id&quot;:null}}" data-hydro-click-hmac="cb9e5ba88320e57b61b1babf94f85ff54b85141937025e1dc0e198fb37f38cd5"
          data-ga-click="(Logged out) Header, clicked Sign in, text:sign-in">
          Sign&nbsp;in
        </a>
          <a href="/join?source=header-repo"
            class="HeaderMenu-link d-inline-block no-underline border border-gray-dark rounded-1 px-2 py-1"
            data-hydro-click="{&quot;event_type&quot;:&quot;authentication.click&quot;,&quot;payload&quot;:{&quot;location_in_page&quot;:&quot;site header menu&quot;,&quot;repository_id&quot;:null,&quot;auth_type&quot;:&quot;SIGN_UP&quot;,&quot;client_id&quot;:&quot;441500614.1532340764&quot;,&quot;originating_request_id&quot;:&quot;A70D:7208:10F185:17F404:5D035848&quot;,&quot;originating_url&quot;:&quot;https://github.com/christianc1/wordpress-memcached/blob/master/wp-content/advanced-cache.php&quot;,&quot;referrer&quot;:&quot;https://github.com/christianc1/wordpress-memcached/tree/master/wp-content&quot;,&quot;user_id&quot;:null}}" data-hydro-click-hmac="cb9e5ba88320e57b61b1babf94f85ff54b85141937025e1dc0e198fb37f38cd5"
            data-ga-click="(Logged out) Header, clicked Sign up, text:sign-up">
            Sign&nbsp;up
          </a>
      </div>
    </div>
  </div>
</header>

  </div>

  <div id="start-of-content" class="show-on-focus"></div>


    <div id="js-flash-container">

</div>



  <div class="application-main " data-commit-hovercards-enabled>
        <div itemscope itemtype="http://schema.org/SoftwareSourceCode" class="">
    <main  >
      


  






  <div class="pagehead repohead instapaper_ignore readability-menu experiment-repo-nav pt-0 pt-lg-4 ">
    <div class="repohead-details-container clearfix container-lg p-responsive d-none d-lg-block">

      <ul class="pagehead-actions">




  <li>
    
  <a class="tooltipped tooltipped-s btn btn-sm btn-with-count" aria-label="You must be signed in to watch a repository" rel="nofollow" data-hydro-click="{&quot;event_type&quot;:&quot;authentication.click&quot;,&quot;payload&quot;:{&quot;location_in_page&quot;:&quot;notification subscription menu watch&quot;,&quot;repository_id&quot;:null,&quot;auth_type&quot;:&quot;LOG_IN&quot;,&quot;client_id&quot;:&quot;441500614.1532340764&quot;,&quot;originating_request_id&quot;:&quot;A70D:7208:10F185:17F404:5D035848&quot;,&quot;originating_url&quot;:&quot;https://github.com/christianc1/wordpress-memcached/blob/master/wp-content/advanced-cache.php&quot;,&quot;referrer&quot;:&quot;https://github.com/christianc1/wordpress-memcached/tree/master/wp-content&quot;,&quot;user_id&quot;:null}}" data-hydro-click-hmac="e527ef260817d8625afe9ef3eaf1fba565cae99f2dc1de905522eda603725f17" href="/login?return_to=%2Fchristianc1%2Fwordpress-memcached">
    <svg class="octicon octicon-eye v-align-text-bottom" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/></svg>
    Watch
</a>    <a class="social-count" href="/christianc1/wordpress-memcached/watchers"
       aria-label="1 user is watching this repository">
      1
    </a>

  </li>

  <li>
        <a class="btn btn-sm btn-with-count tooltipped tooltipped-s" aria-label="You must be signed in to star a repository" rel="nofollow" data-hydro-click="{&quot;event_type&quot;:&quot;authentication.click&quot;,&quot;payload&quot;:{&quot;location_in_page&quot;:&quot;star button&quot;,&quot;repository_id&quot;:77070505,&quot;auth_type&quot;:&quot;LOG_IN&quot;,&quot;client_id&quot;:&quot;441500614.1532340764&quot;,&quot;originating_request_id&quot;:&quot;A70D:7208:10F185:17F404:5D035848&quot;,&quot;originating_url&quot;:&quot;https://github.com/christianc1/wordpress-memcached/blob/master/wp-content/advanced-cache.php&quot;,&quot;referrer&quot;:&quot;https://github.com/christianc1/wordpress-memcached/tree/master/wp-content&quot;,&quot;user_id&quot;:null}}" data-hydro-click-hmac="9918dea2067efe4674e0e21ef559750800000356d885b9960553d6bbe0261658" href="/login?return_to=%2Fchristianc1%2Fwordpress-memcached">
      <svg class="octicon octicon-star v-align-text-bottom" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74L14 6z"/></svg>
      Star
</a>
    <a class="social-count js-social-count" href="/christianc1/wordpress-memcached/stargazers"
      aria-label="1 user starred this repository">
      1
    </a>

  </li>

  <li>
      <a class="btn btn-sm btn-with-count tooltipped tooltipped-s" aria-label="You must be signed in to fork a repository" rel="nofollow" data-hydro-click="{&quot;event_type&quot;:&quot;authentication.click&quot;,&quot;payload&quot;:{&quot;location_in_page&quot;:&quot;repo details fork button&quot;,&quot;repository_id&quot;:77070505,&quot;auth_type&quot;:&quot;LOG_IN&quot;,&quot;client_id&quot;:&quot;441500614.1532340764&quot;,&quot;originating_request_id&quot;:&quot;A70D:7208:10F185:17F404:5D035848&quot;,&quot;originating_url&quot;:&quot;https://github.com/christianc1/wordpress-memcached/blob/master/wp-content/advanced-cache.php&quot;,&quot;referrer&quot;:&quot;https://github.com/christianc1/wordpress-memcached/tree/master/wp-content&quot;,&quot;user_id&quot;:null}}" data-hydro-click-hmac="694a2ac1b5cce6042ac019980e6980ce435d389454e0a2783fc16a8152821cb6" href="/login?return_to=%2Fchristianc1%2Fwordpress-memcached">
        <svg class="octicon octicon-repo-forked v-align-text-bottom" viewBox="0 0 10 16" version="1.1" width="10" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8 1a1.993 1.993 0 0 0-1 3.72V6L5 8 3 6V4.72A1.993 1.993 0 0 0 2 1a1.993 1.993 0 0 0-1 3.72V6.5l3 3v1.78A1.993 1.993 0 0 0 5 15a1.993 1.993 0 0 0 1-3.72V9.5l3-3V4.72A1.993 1.993 0 0 0 8 1zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3 10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3-10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"/></svg>
        Fork
</a>
    <a href="/christianc1/wordpress-memcached/network/members" class="social-count"
       aria-label="4 users forked this repository">
      4
    </a>
  </li>
</ul>

      <h1 class="public ">
    <svg class="octicon octicon-repo" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"/></svg>
  <span class="author" itemprop="author"><a class="url fn" rel="author" data-hovercard-type="user" data-hovercard-url="/hovercards?user_id=5025568" data-octo-click="hovercard-link-click" data-octo-dimensions="link_type:self" href="/christianc1">christianc1</a></span><!--
--><span class="path-divider">/</span><!--
--><strong itemprop="name"><a data-pjax="#js-repo-pjax-container" href="/christianc1/wordpress-memcached">wordpress-memcached</a></strong>
  

</h1>

    </div>
    
<nav class="hx_reponav reponav js-repo-nav js-sidenav-container-pjax container-lg p-responsive d-none d-lg-block"
     itemscope
     itemtype="http://schema.org/BreadcrumbList"
    aria-label="Repository"
     data-pjax="#js-repo-pjax-container">

  <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a class="js-selected-navigation-item selected reponav-item" itemprop="url" data-hotkey="g c" aria-current="page" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches repo_packages /christianc1/wordpress-memcached" href="/christianc1/wordpress-memcached">
      <svg class="octicon octicon-code" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M9.5 3L8 4.5 11.5 8 8 11.5 9.5 13 14 8 9.5 3zm-5 0L0 8l4.5 5L6 11.5 2.5 8 6 4.5 4.5 3z"/></svg>
      <span itemprop="name">Code</span>
      <meta itemprop="position" content="1">
</a>  </span>

    <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
      <a itemprop="url" data-hotkey="g i" class="js-selected-navigation-item reponav-item" data-selected-links="repo_issues repo_labels repo_milestones /christianc1/wordpress-memcached/issues" href="/christianc1/wordpress-memcached/issues">
        <svg class="octicon octicon-issue-opened" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7zm1 3H6v5h2V4zm0 6H6v2h2v-2z"/></svg>
        <span itemprop="name">Issues</span>
        <span class="Counter">0</span>
        <meta itemprop="position" content="2">
</a>    </span>

  <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a data-hotkey="g p" itemprop="url" class="js-selected-navigation-item reponav-item" data-selected-links="repo_pulls checks /christianc1/wordpress-memcached/pulls" href="/christianc1/wordpress-memcached/pulls">
      <svg class="octicon octicon-git-pull-request" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M11 11.28V5c-.03-.78-.34-1.47-.94-2.06C9.46 2.35 8.78 2.03 8 2H7V0L4 3l3 3V4h1c.27.02.48.11.69.31.21.2.3.42.31.69v6.28A1.993 1.993 0 0 0 10 15a1.993 1.993 0 0 0 1-3.72zm-1 2.92c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zM4 3c0-1.11-.89-2-2-2a1.993 1.993 0 0 0-1 3.72v6.56A1.993 1.993 0 0 0 2 15a1.993 1.993 0 0 0 1-3.72V4.72c.59-.34 1-.98 1-1.72zm-.8 10c0 .66-.55 1.2-1.2 1.2-.65 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"/></svg>
      <span itemprop="name">Pull requests</span>
      <span class="Counter">0</span>
      <meta itemprop="position" content="3">
</a>  </span>


    <a data-hotkey="g b" class="js-selected-navigation-item reponav-item" data-selected-links="repo_projects new_repo_project repo_project /christianc1/wordpress-memcached/projects" href="/christianc1/wordpress-memcached/projects">
      <svg class="octicon octicon-project" viewBox="0 0 15 16" version="1.1" width="15" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M10 12h3V2h-3v10zm-4-2h3V2H6v8zm-4 4h3V2H2v12zm-1 1h13V1H1v14zM14 0H1a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z"/></svg>
      Projects
      <span class="Counter" >0</span>
</a>


    <a data-skip-pjax="true" class="js-selected-navigation-item reponav-item" data-selected-links="security alerts policy /christianc1/wordpress-memcached/security/advisories" href="/christianc1/wordpress-memcached/security/advisories">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="octicon" height="16px" width="16px">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M1 2l7-2 7 2v6.02C15 12.69 9.69 16 8 16c-1.69 0-7-3.31-7-7.98V2zm1 .75L8 1l6 1.75v5.268C14 12.104 9.45 15 8 15c-1.45 0-6-2.896-6-6.982V2.75z"></path>
    <path d="M3 3.5L8 2v12c-1.207 0-5-2.482-5-5.985V3.5z"></path>
</svg>

      Security
</a>
    <a class="js-selected-navigation-item reponav-item" data-selected-links="repo_graphs repo_contributors dependency_graph pulse people /christianc1/wordpress-memcached/pulse" href="/christianc1/wordpress-memcached/pulse">
      <svg class="octicon octicon-graph" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M16 14v1H0V0h1v14h15zM5 13H3V8h2v5zm4 0H7V3h2v10zm4 0h-2V6h2v7z"/></svg>
      Insights
</a>

</nav>

  <div class="reponav-wrapper reponav-small d-lg-none">
  <nav class="reponav js-reponav text-center no-wrap"
       itemscope
       itemtype="http://schema.org/BreadcrumbList">

    <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
      <a class="js-selected-navigation-item selected reponav-item" itemprop="url" aria-current="page" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches repo_packages /christianc1/wordpress-memcached" href="/christianc1/wordpress-memcached">
        <span itemprop="name">Code</span>
        <meta itemprop="position" content="1">
</a>    </span>

      <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
        <a itemprop="url" class="js-selected-navigation-item reponav-item" data-selected-links="repo_issues repo_labels repo_milestones /christianc1/wordpress-memcached/issues" href="/christianc1/wordpress-memcached/issues">
          <span itemprop="name">Issues</span>
          <span class="Counter">0</span>
          <meta itemprop="position" content="2">
</a>      </span>

    <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
      <a itemprop="url" class="js-selected-navigation-item reponav-item" data-selected-links="repo_pulls checks /christianc1/wordpress-memcached/pulls" href="/christianc1/wordpress-memcached/pulls">
        <span itemprop="name">Pull requests</span>
        <span class="Counter">0</span>
        <meta itemprop="position" content="3">
</a>    </span>

      <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
        <a itemprop="url" class="js-selected-navigation-item reponav-item" data-selected-links="repo_projects new_repo_project repo_project /christianc1/wordpress-memcached/projects" href="/christianc1/wordpress-memcached/projects">
          <span itemprop="name">Projects</span>
          <span class="Counter">0</span>
          <meta itemprop="position" content="4">
</a>      </span>


      <a itemprop="url" class="js-selected-navigation-item reponav-item" data-selected-links="security alerts policy /christianc1/wordpress-memcached/security/advisories" href="/christianc1/wordpress-memcached/security/advisories">
        <span itemprop="name">Security</span>
        <meta itemprop="position" content="6">
</a>
      <a class="js-selected-navigation-item reponav-item" data-selected-links="pulse /christianc1/wordpress-memcached/pulse" href="/christianc1/wordpress-memcached/pulse">
        Pulse
</a>

  </nav>
</div>


  </div>
<div class="container-lg new-discussion-timeline experiment-repo-nav  p-responsive">
  <div class="repository-content ">

    
    


  
    <a class="d-none js-permalink-shortcut" data-hotkey="y" href="/christianc1/wordpress-memcached/blob/b68494bc27cda683faa3418bd6b1be982c13c6c8/wp-content/advanced-cache.php">Permalink</a>

    <!-- blob contrib key: blob_contributors:v21:f671de6080057baf7eef1ff1e597a03f -->
          <div class="signup-prompt-bg rounded-1">
      <div class="signup-prompt p-4 text-center mb-4 rounded-1">
        <div class="position-relative">
          <!-- '"` --><!-- </textarea></xmp> --></option></form><form action="/prompt_dismissals/signup" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="_method" value="put" /><input type="hidden" name="authenticity_token" value="sH9g1QBHMFf31nFdlO+eOXtpD3wuK5qU5SE8tYWMeIjJ4Ryxy2ej22nw1XxXIcdwjy9WmT8i1QpM4h1uQQpWIg==" />
            <button type="submit" class="position-absolute top-0 right-0 btn-link link-gray" data-ga-click="(Logged out) Sign up prompt, clicked Dismiss, text:dismiss">
              Dismiss
            </button>
</form>          <h3 class="pt-2">Join GitHub today</h3>
          <p class="col-6 mx-auto">GitHub is home to over 36 million developers working together to host and review code, manage projects, and build software together.</p>
          <a class="btn btn-primary" data-hydro-click="{&quot;event_type&quot;:&quot;authentication.click&quot;,&quot;payload&quot;:{&quot;location_in_page&quot;:&quot;files signup prompt&quot;,&quot;repository_id&quot;:null,&quot;auth_type&quot;:&quot;SIGN_UP&quot;,&quot;client_id&quot;:&quot;441500614.1532340764&quot;,&quot;originating_request_id&quot;:&quot;A70D:7208:10F185:17F404:5D035848&quot;,&quot;originating_url&quot;:&quot;https://github.com/christianc1/wordpress-memcached/blob/master/wp-content/advanced-cache.php&quot;,&quot;referrer&quot;:&quot;https://github.com/christianc1/wordpress-memcached/tree/master/wp-content&quot;,&quot;user_id&quot;:null}}" data-hydro-click-hmac="21392c42ce730dc151d1755dfa24f5fcbe359e40d3a19de21a67255f045da4bc" data-ga-click="(Logged out) Sign up prompt, clicked Sign up, text:sign-up" href="/join?source=prompt-blob-show">Sign up</a>
        </div>
      </div>
    </div>


    <div class="d-flex flex-items-start flex-shrink-0 mb-2 flex-column flex-md-row">
      <span class="d-flex flex-justify-between width-full width-md-auto">
        
<details class="details-reset details-overlay select-menu branch-select-menu  hx_rsm" id="branch-select-menu">
  <summary class="btn btn-sm select-menu-button css-truncate"
           data-hotkey="w"
           
           title="Switch branches or tags">
    <i>Branch:</i>
    <span class="css-truncate-target">master</span>
  </summary>

  <details-menu class="select-menu-modal hx_rsm-modal position-absolute" style="z-index: 99;" src="/christianc1/wordpress-memcached/ref-list/master/wp-content/advanced-cache.php?source_action=show&amp;source_controller=blob" preload>
    <include-fragment class="select-menu-loading-overlay anim-pulse">
      <svg height="32" class="octicon octicon-octoface" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true"><path fill-rule="evenodd" d="M14.7 5.34c.13-.32.55-1.59-.13-3.31 0 0-1.05-.33-3.44 1.3-1-.28-2.07-.32-3.13-.32s-2.13.04-3.13.32c-2.39-1.64-3.44-1.3-3.44-1.3-.68 1.72-.26 2.99-.13 3.31C.49 6.21 0 7.33 0 8.69 0 13.84 3.33 15 7.98 15S16 13.84 16 8.69c0-1.36-.49-2.48-1.3-3.35zM8 14.02c-3.3 0-5.98-.15-5.98-3.35 0-.76.38-1.48 1.02-2.07 1.07-.98 2.9-.46 4.96-.46 2.07 0 3.88-.52 4.96.46.65.59 1.02 1.3 1.02 2.07 0 3.19-2.68 3.35-5.98 3.35zM5.49 9.01c-.66 0-1.2.8-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.54-1.78-1.2-1.78zm5.02 0c-.66 0-1.2.79-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.53-1.78-1.2-1.78z"/></svg>
    </include-fragment>
  </details-menu>
</details>

        <div class="BtnGroup flex-shrink-0 d-md-none">
          <a href="/christianc1/wordpress-memcached/find/master"
                class="js-pjax-capture-input btn btn-sm BtnGroup-item"
                data-pjax
                data-hotkey="t">
            Find file
          </a>
          <clipboard-copy value="wp-content/advanced-cache.php" class="btn btn-sm BtnGroup-item">
            Copy path
          </clipboard-copy>
        </div>
      </span>
      <h2 id="blob-path" class="breadcrumb flex-auto min-width-0 text-normal flex-md-self-center ml-md-2 mr-md-3 my-2 my-md-0">
        <span class="js-repo-root text-bold"><span class="js-path-segment"><a data-pjax="true" href="/christianc1/wordpress-memcached"><span>wordpress-memcached</span></a></span></span><span class="separator">/</span><span class="js-path-segment"><a data-pjax="true" href="/christianc1/wordpress-memcached/tree/master/wp-content"><span>wp-content</span></a></span><span class="separator">/</span><strong class="final-path">advanced-cache.php</strong>
      </h2>

      <div class="BtnGroup flex-shrink-0 d-none d-md-inline-block">
        <a href="/christianc1/wordpress-memcached/find/master"
              class="js-pjax-capture-input btn btn-sm BtnGroup-item"
              data-pjax
              data-hotkey="t">
          Find file
        </a>
        <clipboard-copy value="wp-content/advanced-cache.php" class="btn btn-sm BtnGroup-item">
          Copy path
        </clipboard-copy>
      </div>
    </div>



    
  <div class="Box Box--condensed d-flex flex-column flex-shrink-0">
      <div class="Box-body d-flex flex-justify-between bg-blue-light flex-column flex-md-row flex-items-start flex-md-items-center">
        <span class="pr-md-4 f6">
          <a rel="author" data-skip-pjax="true" data-hovercard-type="user" data-hovercard-url="/hovercards?user_id=5025568" data-octo-click="hovercard-link-click" data-octo-dimensions="link_type:self" href="/christianc1"><img class="avatar" src="https://avatars3.githubusercontent.com/u/5025568?s=40&amp;v=4" width="20" height="20" alt="@christianc1" /></a>
          <a class="text-bold link-gray-dark lh-default v-align-middle" rel="author" data-hovercard-type="user" data-hovercard-url="/hovercards?user_id=5025568" data-octo-click="hovercard-link-click" data-octo-dimensions="link_type:self" href="/christianc1">christianc1</a>
            <span class="lh-default v-align-middle">
              <a data-pjax="true" title="chore(release): WP 4.7" class="link-gray" href="/christianc1/wordpress-memcached/commit/808564eab889ccfe23153f63db67f72650c8107c">chore(release): WP 4.7</a>
            </span>
        </span>
        <span class="d-inline-block flex-shrink-0 v-align-bottom f6 mt-2 mt-md-0">
          <a class="pr-2 text-mono link-gray" href="/christianc1/wordpress-memcached/commit/808564eab889ccfe23153f63db67f72650c8107c" data-pjax>808564e</a>
          <relative-time datetime="2016-12-21T17:01:21Z">Dec 22, 2016</relative-time>
        </span>
      </div>

    <div class="Box-body d-flex flex-items-center flex-auto f6 border-bottom-0 flex-wrap" >
      <details class="details-reset details-overlay details-overlay-dark lh-default text-gray-dark float-left mr-2" id="blob_contributors_box">
        <summary class="btn-link" aria-haspopup="dialog">
          <span><strong>1</strong> contributor</span>
        </summary>
        <details-dialog
          class="Box Box--overlay d-flex flex-column anim-fade-in fast"
          aria-label="Users who have contributed to this file"
          src="/christianc1/wordpress-memcached/contributors/master/wp-content/advanced-cache.php/list" preload>
          <div class="Box-header">
            <button class="Box-btn-octicon btn-octicon float-right" type="button" aria-label="Close dialog" data-close-dialog>
              <svg class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg>
            </button>
            <h3 class="Box-title">
              Users who have contributed to this file
            </h3>
          </div>
          <include-fragment class="octocat-spinner my-3" aria-label="Loading..."></include-fragment>
        </details-dialog>
      </details>
    </div>
  </div>





    <div class="Box mt-3 position-relative">
      
<div class="Box-header py-2 d-flex flex-column flex-shrink-0 flex-md-row flex-md-items-center">

  <div class="text-mono f6 flex-auto pr-3 flex-order-2 flex-md-order-1 mt-2 mt-md-0">
      550 lines (449 sloc)
      <span class="file-info-divider"></span>
    19.7 KB
  </div>

  <div class="d-flex py-1 py-md-0 flex-auto flex-order-1 flex-md-order-2 flex-sm-grow-0 flex-justify-between">

    <div class="BtnGroup">
      <a id="raw-url" class="btn btn-sm BtnGroup-item" href="/christianc1/wordpress-memcached/raw/master/wp-content/advanced-cache.php">Raw</a>
        <a class="btn btn-sm js-update-url-with-hash BtnGroup-item" data-hotkey="b" href="/christianc1/wordpress-memcached/blame/master/wp-content/advanced-cache.php">Blame</a>
      <a rel="nofollow" class="btn btn-sm BtnGroup-item" href="/christianc1/wordpress-memcached/commits/master/wp-content/advanced-cache.php">History</a>
    </div>


    <div>

          <button type="button" class="btn-octicon disabled tooltipped tooltipped-nw"
            aria-label="You must be signed in to make or propose changes">
            <svg class="octicon octicon-pencil" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"/></svg>
          </button>
          <button type="button" class="btn-octicon btn-octicon-danger disabled tooltipped tooltipped-nw"
            aria-label="You must be signed in to make or propose changes">
            <svg class="octicon octicon-trashcan" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M11 2H9c0-.55-.45-1-1-1H5c-.55 0-1 .45-1 1H2c-.55 0-1 .45-1 1v1c0 .55.45 1 1 1v9c0 .55.45 1 1 1h7c.55 0 1-.45 1-1V5c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1zm-1 12H3V5h1v8h1V5h1v8h1V5h1v8h1V5h1v9zm1-10H2V3h9v1z"/></svg>
          </button>
    </div>
  </div>
</div>




      

  <div itemprop="text" class="Box-body p-0 blob-wrapper data type-php ">
      
<table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tr>
        <td id="L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="LC1" class="blob-code blob-code-inner js-file-line"><span class="pl-pse">&lt;?php</span><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="LC2" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> ( <span class="pl-c1">is_readable</span>( <span class="pl-c1">dirname</span>( <span class="pl-c1">__FILE__</span> ) <span class="pl-k">.</span> <span class="pl-s"><span class="pl-pds">&#39;</span>/batcache-stats.php<span class="pl-pds">&#39;</span></span> ) )</span></td>
      </tr>
      <tr>
        <td id="L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="LC3" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">require_once</span> <span class="pl-c1">dirname</span>( <span class="pl-c1">__FILE__</span> ) <span class="pl-k">.</span> <span class="pl-s"><span class="pl-pds">&#39;</span>/batcache-stats.php<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="LC4" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="LC5" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> ( <span class="pl-k">!</span><span class="pl-c1">function_exists</span>( <span class="pl-s"><span class="pl-pds">&#39;</span>batcache_stats<span class="pl-pds">&#39;</span></span> ) ) {</span></td>
      </tr>
      <tr>
        <td id="L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="LC6" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">function</span> <span class="pl-en">batcache_stats</span>( <span class="pl-smi">$name</span>, <span class="pl-smi">$value</span>, <span class="pl-smi">$num</span> <span class="pl-k">=</span> <span class="pl-c1">1</span>, <span class="pl-smi">$today</span> <span class="pl-k">=</span> <span class="pl-c1">FALSE</span>, <span class="pl-smi">$hour</span> <span class="pl-k">=</span> <span class="pl-c1">FALSE</span> ) { }</span></td>
      </tr>
      <tr>
        <td id="L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="LC7" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="LC8" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="LC9" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> nananananananananananananananana BATCACHE!!!</span></span></td>
      </tr>
      <tr>
        <td id="L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="LC10" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="LC11" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">function</span> <span class="pl-en">batcache_cancel</span>() {</span></td>
      </tr>
      <tr>
        <td id="L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="LC12" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">global</span> <span class="pl-smi">$batcache</span>;</span></td>
      </tr>
      <tr>
        <td id="L13" class="blob-num js-line-number" data-line-number="13"></td>
        <td id="LC13" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L14" class="blob-num js-line-number" data-line-number="14"></td>
        <td id="LC14" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> ( <span class="pl-c1">is_object</span>(<span class="pl-smi">$batcache</span>) )</span></td>
      </tr>
      <tr>
        <td id="L15" class="blob-num js-line-number" data-line-number="15"></td>
        <td id="LC15" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cancel</span> <span class="pl-k">=</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L16" class="blob-num js-line-number" data-line-number="16"></td>
        <td id="LC16" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L17" class="blob-num js-line-number" data-line-number="17"></td>
        <td id="LC17" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L18" class="blob-num js-line-number" data-line-number="18"></td>
        <td id="LC18" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> Variants can be set by functions which use early-set globals like $_SERVER to run simple tests.</span></span></td>
      </tr>
      <tr>
        <td id="L19" class="blob-num js-line-number" data-line-number="19"></td>
        <td id="LC19" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> Functions defined in WordPress, plugins, and themes are not available and MUST NOT be used.</span></span></td>
      </tr>
      <tr>
        <td id="L20" class="blob-num js-line-number" data-line-number="20"></td>
        <td id="LC20" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> Example: vary_cache_on_function(&#39;return preg_match(&quot;/feedburner/i&quot;, $_SERVER[&quot;HTTP_USER_AGENT&quot;]);&#39;);</span></span></td>
      </tr>
      <tr>
        <td id="L21" class="blob-num js-line-number" data-line-number="21"></td>
        <td id="LC21" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span>          This will cause batcache to cache a variant for requests from Feedburner.</span></span></td>
      </tr>
      <tr>
        <td id="L22" class="blob-num js-line-number" data-line-number="22"></td>
        <td id="LC22" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> Tips for writing $function:</span></span></td>
      </tr>
      <tr>
        <td id="L23" class="blob-num js-line-number" data-line-number="23"></td>
        <td id="LC23" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span>  X_X  DO NOT use any functions from your theme or plugins. Those files have not been included. Fatal error.</span></span></td>
      </tr>
      <tr>
        <td id="L24" class="blob-num js-line-number" data-line-number="24"></td>
        <td id="LC24" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span>  X_X  DO NOT use any WordPress functions except is_admin() and is_multisite(). Fatal error.</span></span></td>
      </tr>
      <tr>
        <td id="L25" class="blob-num js-line-number" data-line-number="25"></td>
        <td id="LC25" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span>  X_X  DO NOT include or require files from anywhere without consulting expensive professionals first. Fatal error.</span></span></td>
      </tr>
      <tr>
        <td id="L26" class="blob-num js-line-number" data-line-number="26"></td>
        <td id="LC26" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span>  X_X  DO NOT use $wpdb, $blog_id, $current_user, etc. These have not been initialized.</span></span></td>
      </tr>
      <tr>
        <td id="L27" class="blob-num js-line-number" data-line-number="27"></td>
        <td id="LC27" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span>  ^_^  DO understand how create_function works. This is how your code is used: create_function(&#39;&#39;, $function);</span></span></td>
      </tr>
      <tr>
        <td id="L28" class="blob-num js-line-number" data-line-number="28"></td>
        <td id="LC28" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span>  ^_^  DO remember to return something. The return value determines the cache variant.</span></span></td>
      </tr>
      <tr>
        <td id="L29" class="blob-num js-line-number" data-line-number="29"></td>
        <td id="LC29" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">function</span> <span class="pl-en">vary_cache_on_function</span>(<span class="pl-smi">$function</span>) {</span></td>
      </tr>
      <tr>
        <td id="L30" class="blob-num js-line-number" data-line-number="30"></td>
        <td id="LC30" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">global</span> <span class="pl-smi">$batcache</span>;</span></td>
      </tr>
      <tr>
        <td id="L31" class="blob-num js-line-number" data-line-number="31"></td>
        <td id="LC31" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L32" class="blob-num js-line-number" data-line-number="32"></td>
        <td id="LC32" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> ( <span class="pl-c1">preg_match</span>(<span class="pl-sr"><span class="pl-pds">&#39;/</span>include|require|echo|(?&lt;!s)print|dump|export|open|sock|unlink|`|eval<span class="pl-pds">/i&#39;</span></span>, <span class="pl-smi">$function</span>) )</span></td>
      </tr>
      <tr>
        <td id="L33" class="blob-num js-line-number" data-line-number="33"></td>
        <td id="LC33" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">die</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>Illegal word in variant determiner.<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L34" class="blob-num js-line-number" data-line-number="34"></td>
        <td id="LC34" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L35" class="blob-num js-line-number" data-line-number="35"></td>
        <td id="LC35" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> ( <span class="pl-k">!</span><span class="pl-c1">preg_match</span>(<span class="pl-sr"><span class="pl-pds">&#39;/</span><span class="pl-cce">\$</span>_<span class="pl-pds">/&#39;</span></span>, <span class="pl-smi">$function</span>) )</span></td>
      </tr>
      <tr>
        <td id="L36" class="blob-num js-line-number" data-line-number="36"></td>
        <td id="LC36" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">die</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>Variant determiner should refer to at least one $_ variable.<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L37" class="blob-num js-line-number" data-line-number="37"></td>
        <td id="LC37" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L38" class="blob-num js-line-number" data-line-number="38"></td>
        <td id="LC38" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span>add_variant(<span class="pl-smi">$function</span>);</span></td>
      </tr>
      <tr>
        <td id="L39" class="blob-num js-line-number" data-line-number="39"></td>
        <td id="LC39" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L40" class="blob-num js-line-number" data-line-number="40"></td>
        <td id="LC40" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L41" class="blob-num js-line-number" data-line-number="41"></td>
        <td id="LC41" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">class</span> <span class="pl-en">batcache</span> {</span></td>
      </tr>
      <tr>
        <td id="L42" class="blob-num js-line-number" data-line-number="42"></td>
        <td id="LC42" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c"><span class="pl-c">//</span> This is the base configuration. You can edit these variables or move them into your wp-config.php file.</span></span></td>
      </tr>
      <tr>
        <td id="L43" class="blob-num js-line-number" data-line-number="43"></td>
        <td id="LC43" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">var</span> <span class="pl-smi">$max_age</span> <span class="pl-k">=</span>  <span class="pl-c1">300</span>; <span class="pl-c"><span class="pl-c">//</span> Expire batcache items aged this many seconds (zero to disable batcache)</span></span></td>
      </tr>
      <tr>
        <td id="L44" class="blob-num js-line-number" data-line-number="44"></td>
        <td id="LC44" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L45" class="blob-num js-line-number" data-line-number="45"></td>
        <td id="LC45" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">var</span> <span class="pl-smi">$remote</span>  <span class="pl-k">=</span>    <span class="pl-c1">0</span>; <span class="pl-c"><span class="pl-c">//</span> Zero disables sending buffers to remote datacenters (req/sec is never sent)</span></span></td>
      </tr>
      <tr>
        <td id="L46" class="blob-num js-line-number" data-line-number="46"></td>
        <td id="LC46" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L47" class="blob-num js-line-number" data-line-number="47"></td>
        <td id="LC47" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">var</span> <span class="pl-smi">$times</span>   <span class="pl-k">=</span>    <span class="pl-c1">2</span>; <span class="pl-c"><span class="pl-c">//</span> Only batcache a page after it is accessed this many times... (two or more)</span></span></td>
      </tr>
      <tr>
        <td id="L48" class="blob-num js-line-number" data-line-number="48"></td>
        <td id="LC48" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">var</span> <span class="pl-smi">$seconds</span> <span class="pl-k">=</span>  <span class="pl-c1">120</span>; <span class="pl-c"><span class="pl-c">//</span> ...in this many seconds (zero to ignore this and use batcache immediately)</span></span></td>
      </tr>
      <tr>
        <td id="L49" class="blob-num js-line-number" data-line-number="49"></td>
        <td id="LC49" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L50" class="blob-num js-line-number" data-line-number="50"></td>
        <td id="LC50" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">var</span> <span class="pl-smi">$group</span>   <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>batcache<span class="pl-pds">&#39;</span></span>; <span class="pl-c"><span class="pl-c">//</span> Name of memcached group. You can simulate a cache flush by changing this.</span></span></td>
      </tr>
      <tr>
        <td id="L51" class="blob-num js-line-number" data-line-number="51"></td>
        <td id="LC51" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L52" class="blob-num js-line-number" data-line-number="52"></td>
        <td id="LC52" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">var</span> <span class="pl-smi">$unique</span>  <span class="pl-k">=</span> <span class="pl-c1">array</span>(); <span class="pl-c"><span class="pl-c">//</span> If you conditionally serve different content, put the variable values here.</span></span></td>
      </tr>
      <tr>
        <td id="L53" class="blob-num js-line-number" data-line-number="53"></td>
        <td id="LC53" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L54" class="blob-num js-line-number" data-line-number="54"></td>
        <td id="LC54" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">var</span> <span class="pl-smi">$vary</span>    <span class="pl-k">=</span> <span class="pl-c1">array</span>(); <span class="pl-c"><span class="pl-c">//</span> Array of functions for create_function. The return value is added to $unique above.</span></span></td>
      </tr>
      <tr>
        <td id="L55" class="blob-num js-line-number" data-line-number="55"></td>
        <td id="LC55" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L56" class="blob-num js-line-number" data-line-number="56"></td>
        <td id="LC56" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">var</span> <span class="pl-smi">$headers</span> <span class="pl-k">=</span> <span class="pl-c1">array</span>(); <span class="pl-c"><span class="pl-c">//</span> Add headers here as name=&gt;value or name=&gt;array(values). These will be sent with every response from the cache.</span></span></td>
      </tr>
      <tr>
        <td id="L57" class="blob-num js-line-number" data-line-number="57"></td>
        <td id="LC57" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L58" class="blob-num js-line-number" data-line-number="58"></td>
        <td id="LC58" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">var</span> <span class="pl-smi">$cache_redirects</span> <span class="pl-k">=</span> <span class="pl-c1">false</span>; <span class="pl-c"><span class="pl-c">//</span> Set true to enable redirect caching.</span></span></td>
      </tr>
      <tr>
        <td id="L59" class="blob-num js-line-number" data-line-number="59"></td>
        <td id="LC59" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">var</span> <span class="pl-smi">$redirect_status</span> <span class="pl-k">=</span> <span class="pl-c1">false</span>; <span class="pl-c"><span class="pl-c">//</span> This is set to the response code during a redirect.</span></span></td>
      </tr>
      <tr>
        <td id="L60" class="blob-num js-line-number" data-line-number="60"></td>
        <td id="LC60" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">var</span> <span class="pl-smi">$redirect_location</span> <span class="pl-k">=</span> <span class="pl-c1">false</span>; <span class="pl-c"><span class="pl-c">//</span> This is set to the redirect location.</span></span></td>
      </tr>
      <tr>
        <td id="L61" class="blob-num js-line-number" data-line-number="61"></td>
        <td id="LC61" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L62" class="blob-num js-line-number" data-line-number="62"></td>
        <td id="LC62" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">var</span> <span class="pl-smi">$use_stale</span>        <span class="pl-k">=</span> <span class="pl-c1">true</span>; <span class="pl-c"><span class="pl-c">//</span> Is it ok to return stale cached response when updating the cache?</span></span></td>
      </tr>
      <tr>
        <td id="L63" class="blob-num js-line-number" data-line-number="63"></td>
        <td id="LC63" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">var</span> <span class="pl-smi">$uncached_headers</span> <span class="pl-k">=</span> <span class="pl-c1">array</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>transfer-encoding<span class="pl-pds">&#39;</span></span>); <span class="pl-c"><span class="pl-c">//</span> These headers will never be cached. Apply strtolower.</span></span></td>
      </tr>
      <tr>
        <td id="L64" class="blob-num js-line-number" data-line-number="64"></td>
        <td id="LC64" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L65" class="blob-num js-line-number" data-line-number="65"></td>
        <td id="LC65" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">var</span> <span class="pl-smi">$debug</span>   <span class="pl-k">=</span> <span class="pl-c1">true</span>; <span class="pl-c"><span class="pl-c">//</span> Set false to hide the batcache info &lt;!-- comment --&gt;</span></span></td>
      </tr>
      <tr>
        <td id="L66" class="blob-num js-line-number" data-line-number="66"></td>
        <td id="LC66" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L67" class="blob-num js-line-number" data-line-number="67"></td>
        <td id="LC67" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">var</span> <span class="pl-smi">$cache_control</span> <span class="pl-k">=</span> <span class="pl-c1">true</span>; <span class="pl-c"><span class="pl-c">//</span> Set false to disable Last-Modified and Cache-Control headers</span></span></td>
      </tr>
      <tr>
        <td id="L68" class="blob-num js-line-number" data-line-number="68"></td>
        <td id="LC68" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L69" class="blob-num js-line-number" data-line-number="69"></td>
        <td id="LC69" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">var</span> <span class="pl-smi">$cancel</span> <span class="pl-k">=</span> <span class="pl-c1">false</span>; <span class="pl-c"><span class="pl-c">//</span> Change this to cancel the output buffer. Use batcache_cancel();</span></span></td>
      </tr>
      <tr>
        <td id="L70" class="blob-num js-line-number" data-line-number="70"></td>
        <td id="LC70" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L71" class="blob-num js-line-number" data-line-number="71"></td>
        <td id="LC71" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">var</span> <span class="pl-smi">$noskip_cookies</span> <span class="pl-k">=</span> <span class="pl-c1">array</span>( <span class="pl-s"><span class="pl-pds">&#39;</span>wordpress_test_cookie<span class="pl-pds">&#39;</span></span> ); <span class="pl-c"><span class="pl-c">//</span> Names of cookies - if they exist and the cache would normally be bypassed, don&#39;t bypass it</span></span></td>
      </tr>
      <tr>
        <td id="L72" class="blob-num js-line-number" data-line-number="72"></td>
        <td id="LC72" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L73" class="blob-num js-line-number" data-line-number="73"></td>
        <td id="LC73" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">var</span> <span class="pl-smi">$query</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L74" class="blob-num js-line-number" data-line-number="74"></td>
        <td id="LC74" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">var</span> <span class="pl-smi">$genlock</span> <span class="pl-k">=</span> <span class="pl-c1">false</span>;</span></td>
      </tr>
      <tr>
        <td id="L75" class="blob-num js-line-number" data-line-number="75"></td>
        <td id="LC75" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">var</span> <span class="pl-smi">$do</span> <span class="pl-k">=</span> <span class="pl-c1">false</span>;</span></td>
      </tr>
      <tr>
        <td id="L76" class="blob-num js-line-number" data-line-number="76"></td>
        <td id="LC76" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L77" class="blob-num js-line-number" data-line-number="77"></td>
        <td id="LC77" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">function</span> <span class="pl-c1">__construct</span>( <span class="pl-smi">$settings</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L78" class="blob-num js-line-number" data-line-number="78"></td>
        <td id="LC78" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> ( <span class="pl-c1">is_array</span>( <span class="pl-smi">$settings</span> ) ) <span class="pl-k">foreach</span> ( <span class="pl-smi">$settings</span> <span class="pl-k">as</span> <span class="pl-smi">$k</span> <span class="pl-k">=&gt;</span> <span class="pl-smi">$v</span> )</span></td>
      </tr>
      <tr>
        <td id="L79" class="blob-num js-line-number" data-line-number="79"></td>
        <td id="LC79" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">$k</span> <span class="pl-k">=</span> <span class="pl-smi">$v</span>;</span></td>
      </tr>
      <tr>
        <td id="L80" class="blob-num js-line-number" data-line-number="80"></td>
        <td id="LC80" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L81" class="blob-num js-line-number" data-line-number="81"></td>
        <td id="LC81" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L82" class="blob-num js-line-number" data-line-number="82"></td>
        <td id="LC82" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">function</span> <span class="pl-en">is_ssl</span>() {</span></td>
      </tr>
      <tr>
        <td id="L83" class="blob-num js-line-number" data-line-number="83"></td>
        <td id="LC83" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> ( <span class="pl-c1">isset</span>(<span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>HTTPS<span class="pl-pds">&#39;</span></span>]) ) {</span></td>
      </tr>
      <tr>
        <td id="L84" class="blob-num js-line-number" data-line-number="84"></td>
        <td id="LC84" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">if</span> ( <span class="pl-s"><span class="pl-pds">&#39;</span>on<span class="pl-pds">&#39;</span></span> <span class="pl-k">==</span> <span class="pl-c1">strtolower</span>(<span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>HTTPS<span class="pl-pds">&#39;</span></span>]) )</span></td>
      </tr>
      <tr>
        <td id="L85" class="blob-num js-line-number" data-line-number="85"></td>
        <td id="LC85" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				<span class="pl-k">return</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L86" class="blob-num js-line-number" data-line-number="86"></td>
        <td id="LC86" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">if</span> ( <span class="pl-s"><span class="pl-pds">&#39;</span>1<span class="pl-pds">&#39;</span></span> <span class="pl-k">==</span> <span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>HTTPS<span class="pl-pds">&#39;</span></span>] )</span></td>
      </tr>
      <tr>
        <td id="L87" class="blob-num js-line-number" data-line-number="87"></td>
        <td id="LC87" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				<span class="pl-k">return</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L88" class="blob-num js-line-number" data-line-number="88"></td>
        <td id="LC88" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		} <span class="pl-k">elseif</span> ( <span class="pl-c1">isset</span>(<span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>SERVER_PORT<span class="pl-pds">&#39;</span></span>]) <span class="pl-k">&amp;&amp;</span> ( <span class="pl-s"><span class="pl-pds">&#39;</span>443<span class="pl-pds">&#39;</span></span> <span class="pl-k">==</span> <span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>SERVER_PORT<span class="pl-pds">&#39;</span></span>] ) ) {</span></td>
      </tr>
      <tr>
        <td id="L89" class="blob-num js-line-number" data-line-number="89"></td>
        <td id="LC89" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">return</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L90" class="blob-num js-line-number" data-line-number="90"></td>
        <td id="LC90" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L91" class="blob-num js-line-number" data-line-number="91"></td>
        <td id="LC91" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">return</span> <span class="pl-c1">false</span>;</span></td>
      </tr>
      <tr>
        <td id="L92" class="blob-num js-line-number" data-line-number="92"></td>
        <td id="LC92" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L93" class="blob-num js-line-number" data-line-number="93"></td>
        <td id="LC93" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L94" class="blob-num js-line-number" data-line-number="94"></td>
        <td id="LC94" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">function</span> <span class="pl-en">status_header</span>( <span class="pl-smi">$status_header</span>, <span class="pl-smi">$status_code</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L95" class="blob-num js-line-number" data-line-number="95"></td>
        <td id="LC95" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">status_header</span> <span class="pl-k">=</span> <span class="pl-smi">$status_header</span>;</span></td>
      </tr>
      <tr>
        <td id="L96" class="blob-num js-line-number" data-line-number="96"></td>
        <td id="LC96" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">status_code</span> <span class="pl-k">=</span> <span class="pl-smi">$status_code</span>;</span></td>
      </tr>
      <tr>
        <td id="L97" class="blob-num js-line-number" data-line-number="97"></td>
        <td id="LC97" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L98" class="blob-num js-line-number" data-line-number="98"></td>
        <td id="LC98" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">return</span> <span class="pl-smi">$status_header</span>;</span></td>
      </tr>
      <tr>
        <td id="L99" class="blob-num js-line-number" data-line-number="99"></td>
        <td id="LC99" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L100" class="blob-num js-line-number" data-line-number="100"></td>
        <td id="LC100" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L101" class="blob-num js-line-number" data-line-number="101"></td>
        <td id="LC101" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">function</span> <span class="pl-en">redirect_status</span>( <span class="pl-smi">$status</span>, <span class="pl-smi">$location</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L102" class="blob-num js-line-number" data-line-number="102"></td>
        <td id="LC102" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> ( <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache_redirects</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L103" class="blob-num js-line-number" data-line-number="103"></td>
        <td id="LC103" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">redirect_status</span> <span class="pl-k">=</span> <span class="pl-smi">$status</span>;</span></td>
      </tr>
      <tr>
        <td id="L104" class="blob-num js-line-number" data-line-number="104"></td>
        <td id="LC104" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">redirect_location</span> <span class="pl-k">=</span> <span class="pl-smi">$location</span>;</span></td>
      </tr>
      <tr>
        <td id="L105" class="blob-num js-line-number" data-line-number="105"></td>
        <td id="LC105" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L106" class="blob-num js-line-number" data-line-number="106"></td>
        <td id="LC106" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L107" class="blob-num js-line-number" data-line-number="107"></td>
        <td id="LC107" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">return</span> <span class="pl-smi">$status</span>;</span></td>
      </tr>
      <tr>
        <td id="L108" class="blob-num js-line-number" data-line-number="108"></td>
        <td id="LC108" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L109" class="blob-num js-line-number" data-line-number="109"></td>
        <td id="LC109" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L110" class="blob-num js-line-number" data-line-number="110"></td>
        <td id="LC110" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">function</span> <span class="pl-en">do_headers</span>( <span class="pl-smi">$headers1</span>, <span class="pl-smi">$headers2</span> <span class="pl-k">=</span> <span class="pl-c1">array</span>() ) {</span></td>
      </tr>
      <tr>
        <td id="L111" class="blob-num js-line-number" data-line-number="111"></td>
        <td id="LC111" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c"><span class="pl-c">//</span> Merge the arrays of headers into one</span></span></td>
      </tr>
      <tr>
        <td id="L112" class="blob-num js-line-number" data-line-number="112"></td>
        <td id="LC112" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$headers</span> <span class="pl-k">=</span> <span class="pl-c1">array</span>();</span></td>
      </tr>
      <tr>
        <td id="L113" class="blob-num js-line-number" data-line-number="113"></td>
        <td id="LC113" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$keys</span> <span class="pl-k">=</span> <span class="pl-c1">array_unique</span>( <span class="pl-c1">array_merge</span>( <span class="pl-c1">array_keys</span>( <span class="pl-smi">$headers1</span> ), <span class="pl-c1">array_keys</span>( <span class="pl-smi">$headers2</span> ) ) );</span></td>
      </tr>
      <tr>
        <td id="L114" class="blob-num js-line-number" data-line-number="114"></td>
        <td id="LC114" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">foreach</span> ( <span class="pl-smi">$keys</span> <span class="pl-k">as</span> <span class="pl-smi">$k</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L115" class="blob-num js-line-number" data-line-number="115"></td>
        <td id="LC115" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$headers</span>[<span class="pl-smi">$k</span>] <span class="pl-k">=</span> <span class="pl-c1">array</span>();</span></td>
      </tr>
      <tr>
        <td id="L116" class="blob-num js-line-number" data-line-number="116"></td>
        <td id="LC116" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">if</span> ( <span class="pl-c1">isset</span>( <span class="pl-smi">$headers1</span>[<span class="pl-smi">$k</span>] ) <span class="pl-k">&amp;&amp;</span> <span class="pl-c1">isset</span>( <span class="pl-smi">$headers2</span>[<span class="pl-smi">$k</span>] ) )</span></td>
      </tr>
      <tr>
        <td id="L117" class="blob-num js-line-number" data-line-number="117"></td>
        <td id="LC117" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				<span class="pl-smi">$headers</span>[<span class="pl-smi">$k</span>] <span class="pl-k">=</span> <span class="pl-c1">array_merge</span>( (<span class="pl-k">array</span>) <span class="pl-smi">$headers2</span>[<span class="pl-smi">$k</span>], (<span class="pl-k">array</span>) <span class="pl-smi">$headers1</span>[<span class="pl-smi">$k</span>] );</span></td>
      </tr>
      <tr>
        <td id="L118" class="blob-num js-line-number" data-line-number="118"></td>
        <td id="LC118" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">elseif</span> ( <span class="pl-c1">isset</span>( <span class="pl-smi">$headers2</span>[<span class="pl-smi">$k</span>] ) )</span></td>
      </tr>
      <tr>
        <td id="L119" class="blob-num js-line-number" data-line-number="119"></td>
        <td id="LC119" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				<span class="pl-smi">$headers</span>[<span class="pl-smi">$k</span>] <span class="pl-k">=</span> (<span class="pl-k">array</span>) <span class="pl-smi">$headers2</span>[<span class="pl-smi">$k</span>];</span></td>
      </tr>
      <tr>
        <td id="L120" class="blob-num js-line-number" data-line-number="120"></td>
        <td id="LC120" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">else</span></span></td>
      </tr>
      <tr>
        <td id="L121" class="blob-num js-line-number" data-line-number="121"></td>
        <td id="LC121" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				<span class="pl-smi">$headers</span>[<span class="pl-smi">$k</span>] <span class="pl-k">=</span> (<span class="pl-k">array</span>) <span class="pl-smi">$headers1</span>[<span class="pl-smi">$k</span>];</span></td>
      </tr>
      <tr>
        <td id="L122" class="blob-num js-line-number" data-line-number="122"></td>
        <td id="LC122" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$headers</span>[<span class="pl-smi">$k</span>] <span class="pl-k">=</span> <span class="pl-c1">array_unique</span>( <span class="pl-smi">$headers</span>[<span class="pl-smi">$k</span>] );</span></td>
      </tr>
      <tr>
        <td id="L123" class="blob-num js-line-number" data-line-number="123"></td>
        <td id="LC123" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L124" class="blob-num js-line-number" data-line-number="124"></td>
        <td id="LC124" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c"><span class="pl-c">//</span> These headers take precedence over any previously sent with the same names</span></span></td>
      </tr>
      <tr>
        <td id="L125" class="blob-num js-line-number" data-line-number="125"></td>
        <td id="LC125" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">foreach</span> ( <span class="pl-smi">$headers</span> <span class="pl-k">as</span> <span class="pl-smi">$k</span> <span class="pl-k">=&gt;</span> <span class="pl-smi">$values</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L126" class="blob-num js-line-number" data-line-number="126"></td>
        <td id="LC126" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$clobber</span> <span class="pl-k">=</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L127" class="blob-num js-line-number" data-line-number="127"></td>
        <td id="LC127" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">foreach</span> ( <span class="pl-smi">$values</span> <span class="pl-k">as</span> <span class="pl-smi">$v</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L128" class="blob-num js-line-number" data-line-number="128"></td>
        <td id="LC128" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				<span class="pl-c1">header</span>( <span class="pl-s"><span class="pl-pds">&quot;</span><span class="pl-smi">$k</span>: <span class="pl-smi">$v</span><span class="pl-pds">&quot;</span></span>, <span class="pl-smi">$clobber</span> );</span></td>
      </tr>
      <tr>
        <td id="L129" class="blob-num js-line-number" data-line-number="129"></td>
        <td id="LC129" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				<span class="pl-smi">$clobber</span> <span class="pl-k">=</span> <span class="pl-c1">false</span>;</span></td>
      </tr>
      <tr>
        <td id="L130" class="blob-num js-line-number" data-line-number="130"></td>
        <td id="LC130" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			}</span></td>
      </tr>
      <tr>
        <td id="L131" class="blob-num js-line-number" data-line-number="131"></td>
        <td id="LC131" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L132" class="blob-num js-line-number" data-line-number="132"></td>
        <td id="LC132" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L133" class="blob-num js-line-number" data-line-number="133"></td>
        <td id="LC133" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L134" class="blob-num js-line-number" data-line-number="134"></td>
        <td id="LC134" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">function</span> <span class="pl-en">configure_groups</span>() {</span></td>
      </tr>
      <tr>
        <td id="L135" class="blob-num js-line-number" data-line-number="135"></td>
        <td id="LC135" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c"><span class="pl-c">//</span> Configure the memcached client</span></span></td>
      </tr>
      <tr>
        <td id="L136" class="blob-num js-line-number" data-line-number="136"></td>
        <td id="LC136" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> ( <span class="pl-k">!</span> <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">remote</span> )</span></td>
      </tr>
      <tr>
        <td id="L137" class="blob-num js-line-number" data-line-number="137"></td>
        <td id="LC137" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">if</span> ( <span class="pl-c1">function_exists</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>wp_cache_add_no_remote_groups<span class="pl-pds">&#39;</span></span>) )</span></td>
      </tr>
      <tr>
        <td id="L138" class="blob-num js-line-number" data-line-number="138"></td>
        <td id="LC138" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				wp_cache_add_no_remote_groups(<span class="pl-c1">array</span>(<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">group</span>));</span></td>
      </tr>
      <tr>
        <td id="L139" class="blob-num js-line-number" data-line-number="139"></td>
        <td id="LC139" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> ( <span class="pl-c1">function_exists</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>wp_cache_add_global_groups<span class="pl-pds">&#39;</span></span>) )</span></td>
      </tr>
      <tr>
        <td id="L140" class="blob-num js-line-number" data-line-number="140"></td>
        <td id="LC140" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			wp_cache_add_global_groups(<span class="pl-c1">array</span>(<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">group</span>));</span></td>
      </tr>
      <tr>
        <td id="L141" class="blob-num js-line-number" data-line-number="141"></td>
        <td id="LC141" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L142" class="blob-num js-line-number" data-line-number="142"></td>
        <td id="LC142" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L143" class="blob-num js-line-number" data-line-number="143"></td>
        <td id="LC143" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c"><span class="pl-c">//</span> Defined here because timer_stop() calls number_format_i18n()</span></span></td>
      </tr>
      <tr>
        <td id="L144" class="blob-num js-line-number" data-line-number="144"></td>
        <td id="LC144" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">function</span> <span class="pl-en">timer_stop</span>(<span class="pl-smi">$display</span> <span class="pl-k">=</span> <span class="pl-c1">0</span>, <span class="pl-smi">$precision</span> <span class="pl-k">=</span> <span class="pl-c1">3</span>) {</span></td>
      </tr>
      <tr>
        <td id="L145" class="blob-num js-line-number" data-line-number="145"></td>
        <td id="LC145" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">global</span> <span class="pl-smi">$timestart</span>, <span class="pl-smi">$timeend</span>;</span></td>
      </tr>
      <tr>
        <td id="L146" class="blob-num js-line-number" data-line-number="146"></td>
        <td id="LC146" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$mtime</span> <span class="pl-k">=</span> <span class="pl-c1">microtime</span>();</span></td>
      </tr>
      <tr>
        <td id="L147" class="blob-num js-line-number" data-line-number="147"></td>
        <td id="LC147" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$mtime</span> <span class="pl-k">=</span> <span class="pl-c1">explode</span>(<span class="pl-s"><span class="pl-pds">&#39;</span> <span class="pl-pds">&#39;</span></span>,<span class="pl-smi">$mtime</span>);</span></td>
      </tr>
      <tr>
        <td id="L148" class="blob-num js-line-number" data-line-number="148"></td>
        <td id="LC148" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$mtime</span> <span class="pl-k">=</span> <span class="pl-smi">$mtime</span>[<span class="pl-c1">1</span>] <span class="pl-k">+</span> <span class="pl-smi">$mtime</span>[<span class="pl-c1">0</span>];</span></td>
      </tr>
      <tr>
        <td id="L149" class="blob-num js-line-number" data-line-number="149"></td>
        <td id="LC149" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$timeend</span> <span class="pl-k">=</span> <span class="pl-smi">$mtime</span>;</span></td>
      </tr>
      <tr>
        <td id="L150" class="blob-num js-line-number" data-line-number="150"></td>
        <td id="LC150" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$timetotal</span> <span class="pl-k">=</span> <span class="pl-smi">$timeend</span><span class="pl-k">-</span><span class="pl-smi">$timestart</span>;</span></td>
      </tr>
      <tr>
        <td id="L151" class="blob-num js-line-number" data-line-number="151"></td>
        <td id="LC151" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$r</span> <span class="pl-k">=</span> <span class="pl-c1">number_format</span>(<span class="pl-smi">$timetotal</span>, <span class="pl-smi">$precision</span>);</span></td>
      </tr>
      <tr>
        <td id="L152" class="blob-num js-line-number" data-line-number="152"></td>
        <td id="LC152" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> ( <span class="pl-smi">$display</span> )</span></td>
      </tr>
      <tr>
        <td id="L153" class="blob-num js-line-number" data-line-number="153"></td>
        <td id="LC153" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-c1">echo</span> <span class="pl-smi">$r</span>;</span></td>
      </tr>
      <tr>
        <td id="L154" class="blob-num js-line-number" data-line-number="154"></td>
        <td id="LC154" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">return</span> <span class="pl-smi">$r</span>;</span></td>
      </tr>
      <tr>
        <td id="L155" class="blob-num js-line-number" data-line-number="155"></td>
        <td id="LC155" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L156" class="blob-num js-line-number" data-line-number="156"></td>
        <td id="LC156" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L157" class="blob-num js-line-number" data-line-number="157"></td>
        <td id="LC157" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">function</span> <span class="pl-en">ob</span>(<span class="pl-smi">$output</span>) {</span></td>
      </tr>
      <tr>
        <td id="L158" class="blob-num js-line-number" data-line-number="158"></td>
        <td id="LC158" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c"><span class="pl-c">//</span> PHP5 and objects disappearing before output buffers?</span></span></td>
      </tr>
      <tr>
        <td id="L159" class="blob-num js-line-number" data-line-number="159"></td>
        <td id="LC159" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		wp_cache_init();</span></td>
      </tr>
      <tr>
        <td id="L160" class="blob-num js-line-number" data-line-number="160"></td>
        <td id="LC160" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L161" class="blob-num js-line-number" data-line-number="161"></td>
        <td id="LC161" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c"><span class="pl-c">//</span> Remember, $wp_object_cache was clobbered in wp-settings.php so we have to repeat this.</span></span></td>
      </tr>
      <tr>
        <td id="L162" class="blob-num js-line-number" data-line-number="162"></td>
        <td id="LC162" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span>configure_groups();</span></td>
      </tr>
      <tr>
        <td id="L163" class="blob-num js-line-number" data-line-number="163"></td>
        <td id="LC163" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L164" class="blob-num js-line-number" data-line-number="164"></td>
        <td id="LC164" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> ( <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cancel</span> <span class="pl-k">!</span><span class="pl-k">==</span> <span class="pl-c1">false</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L165" class="blob-num js-line-number" data-line-number="165"></td>
        <td id="LC165" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			wp_cache_delete( <span class="pl-s"><span class="pl-pds">&quot;</span>{<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">url_key</span>}_genlock<span class="pl-pds">&quot;</span></span>, <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">group</span> );</span></td>
      </tr>
      <tr>
        <td id="L166" class="blob-num js-line-number" data-line-number="166"></td>
        <td id="LC166" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">return</span> <span class="pl-smi">$output</span>;</span></td>
      </tr>
      <tr>
        <td id="L167" class="blob-num js-line-number" data-line-number="167"></td>
        <td id="LC167" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L168" class="blob-num js-line-number" data-line-number="168"></td>
        <td id="LC168" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L169" class="blob-num js-line-number" data-line-number="169"></td>
        <td id="LC169" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c"><span class="pl-c">//</span> Do not batcache blank pages unless they are HTTP redirects</span></span></td>
      </tr>
      <tr>
        <td id="L170" class="blob-num js-line-number" data-line-number="170"></td>
        <td id="LC170" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$output</span> <span class="pl-k">=</span> <span class="pl-c1">trim</span>(<span class="pl-smi">$output</span>);</span></td>
      </tr>
      <tr>
        <td id="L171" class="blob-num js-line-number" data-line-number="171"></td>
        <td id="LC171" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> ( <span class="pl-smi">$output</span> <span class="pl-k">===</span> <span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span> <span class="pl-k">&amp;&amp;</span> (<span class="pl-k">!</span><span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">redirect_status</span> <span class="pl-k">||</span> <span class="pl-k">!</span><span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">redirect_location</span>) ) {</span></td>
      </tr>
      <tr>
        <td id="L172" class="blob-num js-line-number" data-line-number="172"></td>
        <td id="LC172" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			wp_cache_delete( <span class="pl-s"><span class="pl-pds">&quot;</span>{<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">url_key</span>}_genlock<span class="pl-pds">&quot;</span></span>, <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">group</span> );</span></td>
      </tr>
      <tr>
        <td id="L173" class="blob-num js-line-number" data-line-number="173"></td>
        <td id="LC173" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">return</span>;</span></td>
      </tr>
      <tr>
        <td id="L174" class="blob-num js-line-number" data-line-number="174"></td>
        <td id="LC174" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L175" class="blob-num js-line-number" data-line-number="175"></td>
        <td id="LC175" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L176" class="blob-num js-line-number" data-line-number="176"></td>
        <td id="LC176" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c"><span class="pl-c">//</span> Do not cache 5xx responses</span></span></td>
      </tr>
      <tr>
        <td id="L177" class="blob-num js-line-number" data-line-number="177"></td>
        <td id="LC177" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> ( <span class="pl-c1">isset</span>( <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">status_code</span> ) <span class="pl-k">&amp;&amp;</span> <span class="pl-c1">intval</span>(<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">status_code</span> <span class="pl-k">/</span> <span class="pl-c1">100</span>) <span class="pl-k">==</span> <span class="pl-c1">5</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L178" class="blob-num js-line-number" data-line-number="178"></td>
        <td id="LC178" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			wp_cache_delete( <span class="pl-s"><span class="pl-pds">&quot;</span>{<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">url_key</span>}_genlock<span class="pl-pds">&quot;</span></span>, <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">group</span> );</span></td>
      </tr>
      <tr>
        <td id="L179" class="blob-num js-line-number" data-line-number="179"></td>
        <td id="LC179" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">return</span> <span class="pl-smi">$output</span>;</span></td>
      </tr>
      <tr>
        <td id="L180" class="blob-num js-line-number" data-line-number="180"></td>
        <td id="LC180" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L181" class="blob-num js-line-number" data-line-number="181"></td>
        <td id="LC181" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L182" class="blob-num js-line-number" data-line-number="182"></td>
        <td id="LC182" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span>do_variants(<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">vary</span>);</span></td>
      </tr>
      <tr>
        <td id="L183" class="blob-num js-line-number" data-line-number="183"></td>
        <td id="LC183" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span>generate_keys();</span></td>
      </tr>
      <tr>
        <td id="L184" class="blob-num js-line-number" data-line-number="184"></td>
        <td id="LC184" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L185" class="blob-num js-line-number" data-line-number="185"></td>
        <td id="LC185" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c"><span class="pl-c">//</span> Construct and save the batcache</span></span></td>
      </tr>
      <tr>
        <td id="L186" class="blob-num js-line-number" data-line-number="186"></td>
        <td id="LC186" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span> <span class="pl-k">=</span> <span class="pl-c1">array</span>(</span></td>
      </tr>
      <tr>
        <td id="L187" class="blob-num js-line-number" data-line-number="187"></td>
        <td id="LC187" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-s"><span class="pl-pds">&#39;</span>output<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-smi">$output</span>,</span></td>
      </tr>
      <tr>
        <td id="L188" class="blob-num js-line-number" data-line-number="188"></td>
        <td id="LC188" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-s"><span class="pl-pds">&#39;</span>time<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-c1">isset</span>( <span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>REQUEST_TIME<span class="pl-pds">&#39;</span></span>] ) ? <span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>REQUEST_TIME<span class="pl-pds">&#39;</span></span>] : <span class="pl-c1">time</span>(),</span></td>
      </tr>
      <tr>
        <td id="L189" class="blob-num js-line-number" data-line-number="189"></td>
        <td id="LC189" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-s"><span class="pl-pds">&#39;</span>timer<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span>timer_stop(<span class="pl-c1">false</span>, <span class="pl-c1">3</span>),</span></td>
      </tr>
      <tr>
        <td id="L190" class="blob-num js-line-number" data-line-number="190"></td>
        <td id="LC190" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-s"><span class="pl-pds">&#39;</span>headers<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-c1">array</span>(),</span></td>
      </tr>
      <tr>
        <td id="L191" class="blob-num js-line-number" data-line-number="191"></td>
        <td id="LC191" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-s"><span class="pl-pds">&#39;</span>status_header<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">status_header</span>,</span></td>
      </tr>
      <tr>
        <td id="L192" class="blob-num js-line-number" data-line-number="192"></td>
        <td id="LC192" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-s"><span class="pl-pds">&#39;</span>redirect_status<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">redirect_status</span>,</span></td>
      </tr>
      <tr>
        <td id="L193" class="blob-num js-line-number" data-line-number="193"></td>
        <td id="LC193" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-s"><span class="pl-pds">&#39;</span>redirect_location<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">redirect_location</span>,</span></td>
      </tr>
      <tr>
        <td id="L194" class="blob-num js-line-number" data-line-number="194"></td>
        <td id="LC194" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-s"><span class="pl-pds">&#39;</span>version<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">url_version</span></span></td>
      </tr>
      <tr>
        <td id="L195" class="blob-num js-line-number" data-line-number="195"></td>
        <td id="LC195" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		);</span></td>
      </tr>
      <tr>
        <td id="L196" class="blob-num js-line-number" data-line-number="196"></td>
        <td id="LC196" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L197" class="blob-num js-line-number" data-line-number="197"></td>
        <td id="LC197" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">foreach</span> ( <span class="pl-c1">headers_list</span>() <span class="pl-k">as</span> <span class="pl-smi">$header</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L198" class="blob-num js-line-number" data-line-number="198"></td>
        <td id="LC198" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-c1">list</span>(<span class="pl-smi">$k</span>, <span class="pl-smi">$v</span>) <span class="pl-k">=</span> <span class="pl-c1">array_map</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>trim<span class="pl-pds">&#39;</span></span>, <span class="pl-c1">explode</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>:<span class="pl-pds">&#39;</span></span>, <span class="pl-smi">$header</span>, <span class="pl-c1">2</span>));</span></td>
      </tr>
      <tr>
        <td id="L199" class="blob-num js-line-number" data-line-number="199"></td>
        <td id="LC199" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>headers<span class="pl-pds">&#39;</span></span>][<span class="pl-smi">$k</span>][] <span class="pl-k">=</span> <span class="pl-smi">$v</span>;</span></td>
      </tr>
      <tr>
        <td id="L200" class="blob-num js-line-number" data-line-number="200"></td>
        <td id="LC200" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L201" class="blob-num js-line-number" data-line-number="201"></td>
        <td id="LC201" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L202" class="blob-num js-line-number" data-line-number="202"></td>
        <td id="LC202" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> ( <span class="pl-k">!</span><span class="pl-c1">empty</span>( <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>headers<span class="pl-pds">&#39;</span></span>] ) <span class="pl-k">&amp;&amp;</span> <span class="pl-k">!</span><span class="pl-c1">empty</span>( <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">uncached_headers</span> ) ) {</span></td>
      </tr>
      <tr>
        <td id="L203" class="blob-num js-line-number" data-line-number="203"></td>
        <td id="LC203" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">foreach</span> ( <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">uncached_headers</span> <span class="pl-k">as</span> <span class="pl-smi">$header</span> )</span></td>
      </tr>
      <tr>
        <td id="L204" class="blob-num js-line-number" data-line-number="204"></td>
        <td id="LC204" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				<span class="pl-c1">unset</span>( <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>headers<span class="pl-pds">&#39;</span></span>][<span class="pl-smi">$header</span>] );</span></td>
      </tr>
      <tr>
        <td id="L205" class="blob-num js-line-number" data-line-number="205"></td>
        <td id="LC205" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L206" class="blob-num js-line-number" data-line-number="206"></td>
        <td id="LC206" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L207" class="blob-num js-line-number" data-line-number="207"></td>
        <td id="LC207" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">foreach</span> ( <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>headers<span class="pl-pds">&#39;</span></span>] <span class="pl-k">as</span> <span class="pl-smi">$header</span> <span class="pl-k">=&gt;</span> <span class="pl-smi">$values</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L208" class="blob-num js-line-number" data-line-number="208"></td>
        <td id="LC208" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-c"><span class="pl-c">//</span> Do not cache if cookies were set</span></span></td>
      </tr>
      <tr>
        <td id="L209" class="blob-num js-line-number" data-line-number="209"></td>
        <td id="LC209" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">if</span> ( <span class="pl-c1">strtolower</span>( <span class="pl-smi">$header</span> ) <span class="pl-k">===</span> <span class="pl-s"><span class="pl-pds">&#39;</span>set-cookie<span class="pl-pds">&#39;</span></span> ) {</span></td>
      </tr>
      <tr>
        <td id="L210" class="blob-num js-line-number" data-line-number="210"></td>
        <td id="LC210" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				wp_cache_delete( <span class="pl-s"><span class="pl-pds">&quot;</span>{<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">url_key</span>}_genlock<span class="pl-pds">&quot;</span></span>, <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">group</span> );</span></td>
      </tr>
      <tr>
        <td id="L211" class="blob-num js-line-number" data-line-number="211"></td>
        <td id="LC211" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				<span class="pl-k">return</span> <span class="pl-smi">$output</span>;</span></td>
      </tr>
      <tr>
        <td id="L212" class="blob-num js-line-number" data-line-number="212"></td>
        <td id="LC212" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			}</span></td>
      </tr>
      <tr>
        <td id="L213" class="blob-num js-line-number" data-line-number="213"></td>
        <td id="LC213" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L214" class="blob-num js-line-number" data-line-number="214"></td>
        <td id="LC214" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">foreach</span> ( (<span class="pl-k">array</span>) <span class="pl-smi">$values</span> <span class="pl-k">as</span> <span class="pl-smi">$value</span> )</span></td>
      </tr>
      <tr>
        <td id="L215" class="blob-num js-line-number" data-line-number="215"></td>
        <td id="LC215" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				<span class="pl-k">if</span> ( <span class="pl-c1">preg_match</span>(<span class="pl-sr"><span class="pl-pds">&#39;/</span><span class="pl-k">^</span>Cache-Control:.<span class="pl-k">*</span>max-?age=(<span class="pl-cce">\d</span><span class="pl-k">+</span>)<span class="pl-pds">/i&#39;</span></span>, <span class="pl-s"><span class="pl-pds">&quot;</span><span class="pl-smi">$header</span>: <span class="pl-smi">$value</span><span class="pl-pds">&quot;</span></span>, <span class="pl-smi">$matches</span>) )</span></td>
      </tr>
      <tr>
        <td id="L216" class="blob-num js-line-number" data-line-number="216"></td>
        <td id="LC216" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">					<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">max_age</span> <span class="pl-k">=</span> <span class="pl-c1">intval</span>(<span class="pl-smi">$matches</span>[<span class="pl-c1">1</span>]);</span></td>
      </tr>
      <tr>
        <td id="L217" class="blob-num js-line-number" data-line-number="217"></td>
        <td id="LC217" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L218" class="blob-num js-line-number" data-line-number="218"></td>
        <td id="LC218" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L219" class="blob-num js-line-number" data-line-number="219"></td>
        <td id="LC219" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>max_age<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">max_age</span>;</span></td>
      </tr>
      <tr>
        <td id="L220" class="blob-num js-line-number" data-line-number="220"></td>
        <td id="LC220" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L221" class="blob-num js-line-number" data-line-number="221"></td>
        <td id="LC221" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		wp_cache_set(<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">key</span>, <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>, <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">group</span>, <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">max_age</span> <span class="pl-k">+</span> <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">seconds</span> <span class="pl-k">+</span> <span class="pl-c1">30</span>);</span></td>
      </tr>
      <tr>
        <td id="L222" class="blob-num js-line-number" data-line-number="222"></td>
        <td id="LC222" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L223" class="blob-num js-line-number" data-line-number="223"></td>
        <td id="LC223" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c"><span class="pl-c">//</span> Unlock regeneration</span></span></td>
      </tr>
      <tr>
        <td id="L224" class="blob-num js-line-number" data-line-number="224"></td>
        <td id="LC224" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		wp_cache_delete(<span class="pl-s"><span class="pl-pds">&quot;</span>{<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">url_key</span>}_genlock<span class="pl-pds">&quot;</span></span>, <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">group</span>);</span></td>
      </tr>
      <tr>
        <td id="L225" class="blob-num js-line-number" data-line-number="225"></td>
        <td id="LC225" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L226" class="blob-num js-line-number" data-line-number="226"></td>
        <td id="LC226" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> ( <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache_control</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L227" class="blob-num js-line-number" data-line-number="227"></td>
        <td id="LC227" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-c"><span class="pl-c">//</span> Don&#39;t clobber Last-Modified header if already set, e.g. by WP::send_headers()</span></span></td>
      </tr>
      <tr>
        <td id="L228" class="blob-num js-line-number" data-line-number="228"></td>
        <td id="LC228" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">if</span> ( <span class="pl-k">!</span><span class="pl-c1">isset</span>(<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>headers<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>Last-Modified<span class="pl-pds">&#39;</span></span>]) )</span></td>
      </tr>
      <tr>
        <td id="L229" class="blob-num js-line-number" data-line-number="229"></td>
        <td id="LC229" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				<span class="pl-c1">header</span>( <span class="pl-s"><span class="pl-pds">&#39;</span>Last-Modified: <span class="pl-pds">&#39;</span></span> <span class="pl-k">.</span> <span class="pl-c1">gmdate</span>( <span class="pl-s"><span class="pl-pds">&#39;</span>D, d M Y H:i:s<span class="pl-pds">&#39;</span></span>, <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>time<span class="pl-pds">&#39;</span></span>] ) <span class="pl-k">.</span> <span class="pl-s"><span class="pl-pds">&#39;</span> GMT<span class="pl-pds">&#39;</span></span>, <span class="pl-c1">true</span> );</span></td>
      </tr>
      <tr>
        <td id="L230" class="blob-num js-line-number" data-line-number="230"></td>
        <td id="LC230" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">if</span> ( <span class="pl-k">!</span><span class="pl-c1">isset</span>(<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>headers<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>Cache-Control<span class="pl-pds">&#39;</span></span>]) )</span></td>
      </tr>
      <tr>
        <td id="L231" class="blob-num js-line-number" data-line-number="231"></td>
        <td id="LC231" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				<span class="pl-c1">header</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>Cache-Control: max-age=<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">max_age</span>, must-revalidate<span class="pl-pds">&quot;</span></span>, <span class="pl-c1">false</span>);</span></td>
      </tr>
      <tr>
        <td id="L232" class="blob-num js-line-number" data-line-number="232"></td>
        <td id="LC232" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L233" class="blob-num js-line-number" data-line-number="233"></td>
        <td id="LC233" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L234" class="blob-num js-line-number" data-line-number="234"></td>
        <td id="LC234" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span>do_headers( <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">headers</span> );</span></td>
      </tr>
      <tr>
        <td id="L235" class="blob-num js-line-number" data-line-number="235"></td>
        <td id="LC235" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L236" class="blob-num js-line-number" data-line-number="236"></td>
        <td id="LC236" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c"><span class="pl-c">//</span> Add some debug info just before &lt;head</span></span></td>
      </tr>
      <tr>
        <td id="L237" class="blob-num js-line-number" data-line-number="237"></td>
        <td id="LC237" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> ( <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">debug</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L238" class="blob-num js-line-number" data-line-number="238"></td>
        <td id="LC238" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span>add_debug_just_cached();</span></td>
      </tr>
      <tr>
        <td id="L239" class="blob-num js-line-number" data-line-number="239"></td>
        <td id="LC239" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L240" class="blob-num js-line-number" data-line-number="240"></td>
        <td id="LC240" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L241" class="blob-num js-line-number" data-line-number="241"></td>
        <td id="LC241" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c"><span class="pl-c">//</span> Pass output to next ob handler</span></span></td>
      </tr>
      <tr>
        <td id="L242" class="blob-num js-line-number" data-line-number="242"></td>
        <td id="LC242" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		batcache_stats( <span class="pl-s"><span class="pl-pds">&#39;</span>batcache<span class="pl-pds">&#39;</span></span>, <span class="pl-s"><span class="pl-pds">&#39;</span>total_page_views<span class="pl-pds">&#39;</span></span> );</span></td>
      </tr>
      <tr>
        <td id="L243" class="blob-num js-line-number" data-line-number="243"></td>
        <td id="LC243" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">return</span> <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>output<span class="pl-pds">&#39;</span></span>];</span></td>
      </tr>
      <tr>
        <td id="L244" class="blob-num js-line-number" data-line-number="244"></td>
        <td id="LC244" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L245" class="blob-num js-line-number" data-line-number="245"></td>
        <td id="LC245" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L246" class="blob-num js-line-number" data-line-number="246"></td>
        <td id="LC246" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">function</span> <span class="pl-en">add_variant</span>(<span class="pl-smi">$function</span>) {</span></td>
      </tr>
      <tr>
        <td id="L247" class="blob-num js-line-number" data-line-number="247"></td>
        <td id="LC247" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$key</span> <span class="pl-k">=</span> <span class="pl-c1">md5</span>(<span class="pl-smi">$function</span>);</span></td>
      </tr>
      <tr>
        <td id="L248" class="blob-num js-line-number" data-line-number="248"></td>
        <td id="LC248" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">vary</span>[<span class="pl-smi">$key</span>] <span class="pl-k">=</span> <span class="pl-smi">$function</span>;</span></td>
      </tr>
      <tr>
        <td id="L249" class="blob-num js-line-number" data-line-number="249"></td>
        <td id="LC249" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L250" class="blob-num js-line-number" data-line-number="250"></td>
        <td id="LC250" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L251" class="blob-num js-line-number" data-line-number="251"></td>
        <td id="LC251" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">function</span> <span class="pl-en">do_variants</span>(<span class="pl-smi">$dimensions</span> <span class="pl-k">=</span> <span class="pl-c1">false</span>) {</span></td>
      </tr>
      <tr>
        <td id="L252" class="blob-num js-line-number" data-line-number="252"></td>
        <td id="LC252" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c"><span class="pl-c">//</span> This function is called without arguments early in the page load, then with arguments during the OB handler.</span></span></td>
      </tr>
      <tr>
        <td id="L253" class="blob-num js-line-number" data-line-number="253"></td>
        <td id="LC253" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> ( <span class="pl-smi">$dimensions</span> <span class="pl-k">===</span> <span class="pl-c1">false</span> )</span></td>
      </tr>
      <tr>
        <td id="L254" class="blob-num js-line-number" data-line-number="254"></td>
        <td id="LC254" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$dimensions</span> <span class="pl-k">=</span> wp_cache_get(<span class="pl-s"><span class="pl-pds">&quot;</span>{<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">url_key</span>}_vary<span class="pl-pds">&quot;</span></span>, <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">group</span>);</span></td>
      </tr>
      <tr>
        <td id="L255" class="blob-num js-line-number" data-line-number="255"></td>
        <td id="LC255" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">else</span></span></td>
      </tr>
      <tr>
        <td id="L256" class="blob-num js-line-number" data-line-number="256"></td>
        <td id="LC256" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			wp_cache_set(<span class="pl-s"><span class="pl-pds">&quot;</span>{<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">url_key</span>}_vary<span class="pl-pds">&quot;</span></span>, <span class="pl-smi">$dimensions</span>, <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">group</span>, <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">max_age</span> <span class="pl-k">+</span> <span class="pl-c1">10</span>);</span></td>
      </tr>
      <tr>
        <td id="L257" class="blob-num js-line-number" data-line-number="257"></td>
        <td id="LC257" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L258" class="blob-num js-line-number" data-line-number="258"></td>
        <td id="LC258" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> ( <span class="pl-c1">is_array</span>(<span class="pl-smi">$dimensions</span>) ) {</span></td>
      </tr>
      <tr>
        <td id="L259" class="blob-num js-line-number" data-line-number="259"></td>
        <td id="LC259" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-c1">ksort</span>(<span class="pl-smi">$dimensions</span>);</span></td>
      </tr>
      <tr>
        <td id="L260" class="blob-num js-line-number" data-line-number="260"></td>
        <td id="LC260" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">foreach</span> ( <span class="pl-smi">$dimensions</span> <span class="pl-k">as</span> <span class="pl-smi">$key</span> <span class="pl-k">=&gt;</span> <span class="pl-smi">$function</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L261" class="blob-num js-line-number" data-line-number="261"></td>
        <td id="LC261" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				<span class="pl-smi">$fun</span> <span class="pl-k">=</span> <span class="pl-c1">create_function</span>(<span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>, <span class="pl-smi">$function</span>);</span></td>
      </tr>
      <tr>
        <td id="L262" class="blob-num js-line-number" data-line-number="262"></td>
        <td id="LC262" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				<span class="pl-smi">$value</span> <span class="pl-k">=</span> $<span class="pl-smi">fun</span>();</span></td>
      </tr>
      <tr>
        <td id="L263" class="blob-num js-line-number" data-line-number="263"></td>
        <td id="LC263" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">keys</span>[<span class="pl-smi">$key</span>] <span class="pl-k">=</span> <span class="pl-smi">$value</span>;</span></td>
      </tr>
      <tr>
        <td id="L264" class="blob-num js-line-number" data-line-number="264"></td>
        <td id="LC264" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			}</span></td>
      </tr>
      <tr>
        <td id="L265" class="blob-num js-line-number" data-line-number="265"></td>
        <td id="LC265" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L266" class="blob-num js-line-number" data-line-number="266"></td>
        <td id="LC266" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L267" class="blob-num js-line-number" data-line-number="267"></td>
        <td id="LC267" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L268" class="blob-num js-line-number" data-line-number="268"></td>
        <td id="LC268" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">function</span> <span class="pl-en">generate_keys</span>() {</span></td>
      </tr>
      <tr>
        <td id="L269" class="blob-num js-line-number" data-line-number="269"></td>
        <td id="LC269" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c"><span class="pl-c">//</span> ksort($this-&gt;keys); // uncomment this when traffic is slow</span></span></td>
      </tr>
      <tr>
        <td id="L270" class="blob-num js-line-number" data-line-number="270"></td>
        <td id="LC270" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">key</span> <span class="pl-k">=</span> <span class="pl-c1">md5</span>(<span class="pl-c1">serialize</span>(<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">keys</span>));</span></td>
      </tr>
      <tr>
        <td id="L271" class="blob-num js-line-number" data-line-number="271"></td>
        <td id="LC271" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">req_key</span> <span class="pl-k">=</span> <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">key</span> <span class="pl-k">.</span> <span class="pl-s"><span class="pl-pds">&#39;</span>_reqs<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L272" class="blob-num js-line-number" data-line-number="272"></td>
        <td id="LC272" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L273" class="blob-num js-line-number" data-line-number="273"></td>
        <td id="LC273" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L274" class="blob-num js-line-number" data-line-number="274"></td>
        <td id="LC274" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">function</span> <span class="pl-en">add_debug_just_cached</span>() {</span></td>
      </tr>
      <tr>
        <td id="L275" class="blob-num js-line-number" data-line-number="275"></td>
        <td id="LC275" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$generation</span> <span class="pl-k">=</span> <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>timer<span class="pl-pds">&#39;</span></span>];</span></td>
      </tr>
      <tr>
        <td id="L276" class="blob-num js-line-number" data-line-number="276"></td>
        <td id="LC276" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$bytes</span> <span class="pl-k">=</span> <span class="pl-c1">strlen</span>( <span class="pl-c1">serialize</span>( <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span> ) );</span></td>
      </tr>
      <tr>
        <td id="L277" class="blob-num js-line-number" data-line-number="277"></td>
        <td id="LC277" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$html</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pse"><span class="pl-pds">&lt;&lt;&lt;</span><span class="pl-k">HTML</span></span></span></span></td>
      </tr>
      <tr>
        <td id="L278" class="blob-num js-line-number" data-line-number="278"></td>
        <td id="LC278" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-s"><span class="pl-c"><span class="pl-c">&lt;!--</span></span></span></span></td>
      </tr>
      <tr>
        <td id="L279" class="blob-num js-line-number" data-line-number="279"></td>
        <td id="LC279" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-s"><span class="pl-c">	generated in <span class="pl-smi">$generation</span> seconds</span></span></span></td>
      </tr>
      <tr>
        <td id="L280" class="blob-num js-line-number" data-line-number="280"></td>
        <td id="LC280" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-s"><span class="pl-c">	<span class="pl-smi">$bytes</span> bytes batcached for {<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">max_age</span>} seconds</span></span></span></td>
      </tr>
      <tr>
        <td id="L281" class="blob-num js-line-number" data-line-number="281"></td>
        <td id="LC281" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-s"><span class="pl-c"><span class="pl-c">--&gt;</span></span></span></span></td>
      </tr>
      <tr>
        <td id="L282" class="blob-num js-line-number" data-line-number="282"></td>
        <td id="LC282" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-s"></span></span></td>
      </tr>
      <tr>
        <td id="L283" class="blob-num js-line-number" data-line-number="283"></td>
        <td id="LC283" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-s"><span class="pl-pse"><span class="pl-k">HTML</span></span></span>;</span></td>
      </tr>
      <tr>
        <td id="L284" class="blob-num js-line-number" data-line-number="284"></td>
        <td id="LC284" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span>add_debug_html_to_output( <span class="pl-smi">$html</span> );</span></td>
      </tr>
      <tr>
        <td id="L285" class="blob-num js-line-number" data-line-number="285"></td>
        <td id="LC285" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L286" class="blob-num js-line-number" data-line-number="286"></td>
        <td id="LC286" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L287" class="blob-num js-line-number" data-line-number="287"></td>
        <td id="LC287" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">function</span> <span class="pl-en">add_debug_from_cache</span>() {</span></td>
      </tr>
      <tr>
        <td id="L288" class="blob-num js-line-number" data-line-number="288"></td>
        <td id="LC288" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$seconds_ago</span> <span class="pl-k">=</span> <span class="pl-c1">time</span>() <span class="pl-k">-</span> <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>time<span class="pl-pds">&#39;</span></span>];</span></td>
      </tr>
      <tr>
        <td id="L289" class="blob-num js-line-number" data-line-number="289"></td>
        <td id="LC289" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$generation</span> <span class="pl-k">=</span> <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>timer<span class="pl-pds">&#39;</span></span>];</span></td>
      </tr>
      <tr>
        <td id="L290" class="blob-num js-line-number" data-line-number="290"></td>
        <td id="LC290" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$serving</span> <span class="pl-k">=</span> <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span>timer_stop( <span class="pl-c1">false</span>, <span class="pl-c1">3</span> );</span></td>
      </tr>
      <tr>
        <td id="L291" class="blob-num js-line-number" data-line-number="291"></td>
        <td id="LC291" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$expires</span> <span class="pl-k">=</span> <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>max_age<span class="pl-pds">&#39;</span></span>] <span class="pl-k">-</span> <span class="pl-c1">time</span>() <span class="pl-k">+</span> <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>time<span class="pl-pds">&#39;</span></span>];</span></td>
      </tr>
      <tr>
        <td id="L292" class="blob-num js-line-number" data-line-number="292"></td>
        <td id="LC292" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$html</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pse"><span class="pl-pds">&lt;&lt;&lt;</span><span class="pl-k">HTML</span></span></span></span></td>
      </tr>
      <tr>
        <td id="L293" class="blob-num js-line-number" data-line-number="293"></td>
        <td id="LC293" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-s"><span class="pl-c"><span class="pl-c">&lt;!--</span></span></span></span></td>
      </tr>
      <tr>
        <td id="L294" class="blob-num js-line-number" data-line-number="294"></td>
        <td id="LC294" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-s"><span class="pl-c">	generated <span class="pl-smi">$seconds_ago</span> seconds ago</span></span></span></td>
      </tr>
      <tr>
        <td id="L295" class="blob-num js-line-number" data-line-number="295"></td>
        <td id="LC295" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-s"><span class="pl-c">	generated in <span class="pl-smi">$generation</span> seconds</span></span></span></td>
      </tr>
      <tr>
        <td id="L296" class="blob-num js-line-number" data-line-number="296"></td>
        <td id="LC296" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-s"><span class="pl-c">	served from batcache in <span class="pl-smi">$serving</span> seconds</span></span></span></td>
      </tr>
      <tr>
        <td id="L297" class="blob-num js-line-number" data-line-number="297"></td>
        <td id="LC297" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-s"><span class="pl-c">	expires in <span class="pl-smi">$expires</span> seconds</span></span></span></td>
      </tr>
      <tr>
        <td id="L298" class="blob-num js-line-number" data-line-number="298"></td>
        <td id="LC298" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-s"><span class="pl-c"><span class="pl-c">--&gt;</span></span></span></span></td>
      </tr>
      <tr>
        <td id="L299" class="blob-num js-line-number" data-line-number="299"></td>
        <td id="LC299" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-s"></span></span></td>
      </tr>
      <tr>
        <td id="L300" class="blob-num js-line-number" data-line-number="300"></td>
        <td id="LC300" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-s"><span class="pl-pse"><span class="pl-k">HTML</span></span></span>;</span></td>
      </tr>
      <tr>
        <td id="L301" class="blob-num js-line-number" data-line-number="301"></td>
        <td id="LC301" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span>add_debug_html_to_output( <span class="pl-smi">$html</span> );</span></td>
      </tr>
      <tr>
        <td id="L302" class="blob-num js-line-number" data-line-number="302"></td>
        <td id="LC302" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L303" class="blob-num js-line-number" data-line-number="303"></td>
        <td id="LC303" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L304" class="blob-num js-line-number" data-line-number="304"></td>
        <td id="LC304" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">function</span> <span class="pl-en">add_debug_html_to_output</span>( <span class="pl-smi">$debug_html</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L305" class="blob-num js-line-number" data-line-number="305"></td>
        <td id="LC305" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c"><span class="pl-c">//</span> Casing on the Content-Type header is inconsistent</span></span></td>
      </tr>
      <tr>
        <td id="L306" class="blob-num js-line-number" data-line-number="306"></td>
        <td id="LC306" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">foreach</span> ( <span class="pl-c1">array</span>( <span class="pl-s"><span class="pl-pds">&#39;</span>Content-Type<span class="pl-pds">&#39;</span></span>, <span class="pl-s"><span class="pl-pds">&#39;</span>Content-type<span class="pl-pds">&#39;</span></span> ) <span class="pl-k">as</span> <span class="pl-smi">$key</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L307" class="blob-num js-line-number" data-line-number="307"></td>
        <td id="LC307" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">if</span> ( <span class="pl-c1">isset</span>( <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>headers<span class="pl-pds">&#39;</span></span>][ <span class="pl-smi">$key</span> ][<span class="pl-c1">0</span>] ) <span class="pl-k">&amp;&amp;</span> <span class="pl-c1">0</span> <span class="pl-k">!</span><span class="pl-k">==</span> <span class="pl-c1">strpos</span>( <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>headers<span class="pl-pds">&#39;</span></span>][ <span class="pl-smi">$key</span> ][<span class="pl-c1">0</span>], <span class="pl-s"><span class="pl-pds">&#39;</span>text/html<span class="pl-pds">&#39;</span></span> ) )</span></td>
      </tr>
      <tr>
        <td id="L308" class="blob-num js-line-number" data-line-number="308"></td>
        <td id="LC308" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				<span class="pl-k">return</span>;</span></td>
      </tr>
      <tr>
        <td id="L309" class="blob-num js-line-number" data-line-number="309"></td>
        <td id="LC309" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L310" class="blob-num js-line-number" data-line-number="310"></td>
        <td id="LC310" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L311" class="blob-num js-line-number" data-line-number="311"></td>
        <td id="LC311" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$head_position</span> <span class="pl-k">=</span> <span class="pl-c1">strpos</span>( <span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>output<span class="pl-pds">&#39;</span></span>], <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;head<span class="pl-pds">&#39;</span></span> );</span></td>
      </tr>
      <tr>
        <td id="L312" class="blob-num js-line-number" data-line-number="312"></td>
        <td id="LC312" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> ( <span class="pl-c1">false</span> <span class="pl-k">===</span> <span class="pl-smi">$head_position</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L313" class="blob-num js-line-number" data-line-number="313"></td>
        <td id="LC313" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">return</span>;</span></td>
      </tr>
      <tr>
        <td id="L314" class="blob-num js-line-number" data-line-number="314"></td>
        <td id="LC314" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L315" class="blob-num js-line-number" data-line-number="315"></td>
        <td id="LC315" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$this</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>output<span class="pl-pds">&#39;</span></span>] <span class="pl-k">.=</span> <span class="pl-s"><span class="pl-pds">&quot;</span><span class="pl-cce">\n</span><span class="pl-smi">$debug_html</span><span class="pl-pds">&quot;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L316" class="blob-num js-line-number" data-line-number="316"></td>
        <td id="LC316" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L317" class="blob-num js-line-number" data-line-number="317"></td>
        <td id="LC317" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L318" class="blob-num js-line-number" data-line-number="318"></td>
        <td id="LC318" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L319" class="blob-num js-line-number" data-line-number="319"></td>
        <td id="LC319" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">global</span> <span class="pl-smi">$batcache</span>;</span></td>
      </tr>
      <tr>
        <td id="L320" class="blob-num js-line-number" data-line-number="320"></td>
        <td id="LC320" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> Pass in the global variable which may be an array of settings to override defaults.</span></span></td>
      </tr>
      <tr>
        <td id="L321" class="blob-num js-line-number" data-line-number="321"></td>
        <td id="LC321" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$batcache</span> <span class="pl-k">=</span> <span class="pl-k">new</span> <span class="pl-c1">batcache</span>(<span class="pl-smi">$batcache</span>);</span></td>
      </tr>
      <tr>
        <td id="L322" class="blob-num js-line-number" data-line-number="322"></td>
        <td id="LC322" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L323" class="blob-num js-line-number" data-line-number="323"></td>
        <td id="LC323" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> ( <span class="pl-k">!</span> <span class="pl-c1">defined</span>( <span class="pl-s"><span class="pl-pds">&#39;</span>WP_CONTENT_DIR<span class="pl-pds">&#39;</span></span> ) )</span></td>
      </tr>
      <tr>
        <td id="L324" class="blob-num js-line-number" data-line-number="324"></td>
        <td id="LC324" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">return</span>;</span></td>
      </tr>
      <tr>
        <td id="L325" class="blob-num js-line-number" data-line-number="325"></td>
        <td id="LC325" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L326" class="blob-num js-line-number" data-line-number="326"></td>
        <td id="LC326" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> Never batcache interactive scripts or API endpoints.</span></span></td>
      </tr>
      <tr>
        <td id="L327" class="blob-num js-line-number" data-line-number="327"></td>
        <td id="LC327" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> ( <span class="pl-c1">in_array</span>(</span></td>
      </tr>
      <tr>
        <td id="L328" class="blob-num js-line-number" data-line-number="328"></td>
        <td id="LC328" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">basename</span>( <span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>SCRIPT_FILENAME<span class="pl-pds">&#39;</span></span>] ),</span></td>
      </tr>
      <tr>
        <td id="L329" class="blob-num js-line-number" data-line-number="329"></td>
        <td id="LC329" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">array</span>(</span></td>
      </tr>
      <tr>
        <td id="L330" class="blob-num js-line-number" data-line-number="330"></td>
        <td id="LC330" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-s"><span class="pl-pds">&#39;</span>wp-app.php<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L331" class="blob-num js-line-number" data-line-number="331"></td>
        <td id="LC331" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-s"><span class="pl-pds">&#39;</span>xmlrpc.php<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L332" class="blob-num js-line-number" data-line-number="332"></td>
        <td id="LC332" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-s"><span class="pl-pds">&#39;</span>wp-cron.php<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L333" class="blob-num js-line-number" data-line-number="333"></td>
        <td id="LC333" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		) ) )</span></td>
      </tr>
      <tr>
        <td id="L334" class="blob-num js-line-number" data-line-number="334"></td>
        <td id="LC334" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">return</span>;</span></td>
      </tr>
      <tr>
        <td id="L335" class="blob-num js-line-number" data-line-number="335"></td>
        <td id="LC335" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L336" class="blob-num js-line-number" data-line-number="336"></td>
        <td id="LC336" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> Never batcache WP javascript generators</span></span></td>
      </tr>
      <tr>
        <td id="L337" class="blob-num js-line-number" data-line-number="337"></td>
        <td id="LC337" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> ( <span class="pl-c1">strstr</span>( <span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>SCRIPT_FILENAME<span class="pl-pds">&#39;</span></span>], <span class="pl-s"><span class="pl-pds">&#39;</span>wp-includes/js<span class="pl-pds">&#39;</span></span> ) )</span></td>
      </tr>
      <tr>
        <td id="L338" class="blob-num js-line-number" data-line-number="338"></td>
        <td id="LC338" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">return</span>;</span></td>
      </tr>
      <tr>
        <td id="L339" class="blob-num js-line-number" data-line-number="339"></td>
        <td id="LC339" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L340" class="blob-num js-line-number" data-line-number="340"></td>
        <td id="LC340" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> Only cache HEAD and GET requests.</span></span></td>
      </tr>
      <tr>
        <td id="L341" class="blob-num js-line-number" data-line-number="341"></td>
        <td id="LC341" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> ((<span class="pl-c1">isset</span>(<span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>REQUEST_METHOD<span class="pl-pds">&#39;</span></span>]) <span class="pl-k">&amp;&amp;</span> <span class="pl-k">!</span><span class="pl-c1">in_array</span>(<span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>REQUEST_METHOD<span class="pl-pds">&#39;</span></span>], <span class="pl-c1">array</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>GET<span class="pl-pds">&#39;</span></span>, <span class="pl-s"><span class="pl-pds">&#39;</span>HEAD<span class="pl-pds">&#39;</span></span>)))) {</span></td>
      </tr>
      <tr>
        <td id="L342" class="blob-num js-line-number" data-line-number="342"></td>
        <td id="LC342" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">return</span>;</span></td>
      </tr>
      <tr>
        <td id="L343" class="blob-num js-line-number" data-line-number="343"></td>
        <td id="LC343" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L344" class="blob-num js-line-number" data-line-number="344"></td>
        <td id="LC344" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L345" class="blob-num js-line-number" data-line-number="345"></td>
        <td id="LC345" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> Never batcache when cookies indicate a cache-exempt visitor.</span></span></td>
      </tr>
      <tr>
        <td id="L346" class="blob-num js-line-number" data-line-number="346"></td>
        <td id="LC346" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> ( <span class="pl-c1">is_array</span>( <span class="pl-smi">$_COOKIE</span>) <span class="pl-k">&amp;&amp;</span> <span class="pl-k">!</span> <span class="pl-c1">empty</span>( <span class="pl-smi">$_COOKIE</span> ) ) {</span></td>
      </tr>
      <tr>
        <td id="L347" class="blob-num js-line-number" data-line-number="347"></td>
        <td id="LC347" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">foreach</span> ( <span class="pl-c1">array_keys</span>( <span class="pl-smi">$_COOKIE</span> ) <span class="pl-k">as</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cookie</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L348" class="blob-num js-line-number" data-line-number="348"></td>
        <td id="LC348" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> ( <span class="pl-k">!</span> <span class="pl-c1">in_array</span>( <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cookie</span>, <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">noskip_cookies</span> ) <span class="pl-k">&amp;&amp;</span> ( <span class="pl-c1">substr</span>( <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cookie</span>, <span class="pl-c1">0</span>, <span class="pl-c1">2</span> ) <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>wp<span class="pl-pds">&#39;</span></span> <span class="pl-k">||</span> <span class="pl-c1">substr</span>( <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cookie</span>, <span class="pl-c1">0</span>, <span class="pl-c1">9</span> ) <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>wordpress<span class="pl-pds">&#39;</span></span> <span class="pl-k">||</span> <span class="pl-c1">substr</span>( <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cookie</span>, <span class="pl-c1">0</span>, <span class="pl-c1">14</span> ) <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>comment_author<span class="pl-pds">&#39;</span></span> ) ) {</span></td>
      </tr>
      <tr>
        <td id="L349" class="blob-num js-line-number" data-line-number="349"></td>
        <td id="LC349" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			batcache_stats( <span class="pl-s"><span class="pl-pds">&#39;</span>batcache<span class="pl-pds">&#39;</span></span>, <span class="pl-s"><span class="pl-pds">&#39;</span>cookie_skip<span class="pl-pds">&#39;</span></span> );</span></td>
      </tr>
      <tr>
        <td id="L350" class="blob-num js-line-number" data-line-number="350"></td>
        <td id="LC350" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">return</span>;</span></td>
      </tr>
      <tr>
        <td id="L351" class="blob-num js-line-number" data-line-number="351"></td>
        <td id="LC351" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L352" class="blob-num js-line-number" data-line-number="352"></td>
        <td id="LC352" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L353" class="blob-num js-line-number" data-line-number="353"></td>
        <td id="LC353" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L354" class="blob-num js-line-number" data-line-number="354"></td>
        <td id="LC354" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L355" class="blob-num js-line-number" data-line-number="355"></td>
        <td id="LC355" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> ( <span class="pl-k">!</span> <span class="pl-k">include_once</span>( <span class="pl-c1">WP_CONTENT_DIR</span> <span class="pl-k">.</span> <span class="pl-s"><span class="pl-pds">&#39;</span>/object-cache.php<span class="pl-pds">&#39;</span></span> ) )</span></td>
      </tr>
      <tr>
        <td id="L356" class="blob-num js-line-number" data-line-number="356"></td>
        <td id="LC356" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">return</span>;</span></td>
      </tr>
      <tr>
        <td id="L357" class="blob-num js-line-number" data-line-number="357"></td>
        <td id="LC357" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L358" class="blob-num js-line-number" data-line-number="358"></td>
        <td id="LC358" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">wp_cache_init(); <span class="pl-c"><span class="pl-c">//</span> Note: wp-settings.php calls wp_cache_init() which clobbers the object made here.</span></span></td>
      </tr>
      <tr>
        <td id="L359" class="blob-num js-line-number" data-line-number="359"></td>
        <td id="LC359" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L360" class="blob-num js-line-number" data-line-number="360"></td>
        <td id="LC360" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> ( <span class="pl-k">!</span> <span class="pl-c1">is_object</span>( <span class="pl-smi">$wp_object_cache</span> ) )</span></td>
      </tr>
      <tr>
        <td id="L361" class="blob-num js-line-number" data-line-number="361"></td>
        <td id="LC361" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">return</span>;</span></td>
      </tr>
      <tr>
        <td id="L362" class="blob-num js-line-number" data-line-number="362"></td>
        <td id="LC362" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L363" class="blob-num js-line-number" data-line-number="363"></td>
        <td id="LC363" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> Now that the defaults are set, you might want to use different settings under certain conditions.</span></span></td>
      </tr>
      <tr>
        <td id="L364" class="blob-num js-line-number" data-line-number="364"></td>
        <td id="LC364" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L365" class="blob-num js-line-number" data-line-number="365"></td>
        <td id="LC365" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">/*</span> Example: if your documents have a mobile variant (a different document served by the same URL) you must tell batcache about the variance. Otherwise you might accidentally cache the mobile version and serve it to desktop users, or vice versa.</span></span></td>
      </tr>
      <tr>
        <td id="L366" class="blob-num js-line-number" data-line-number="366"></td>
        <td id="LC366" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">$batcache-&gt;unique[&#39;mobile&#39;] = is_mobile_user_agent();</span></span></td>
      </tr>
      <tr>
        <td id="L367" class="blob-num js-line-number" data-line-number="367"></td>
        <td id="LC367" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">*/</span></span></span></td>
      </tr>
      <tr>
        <td id="L368" class="blob-num js-line-number" data-line-number="368"></td>
        <td id="LC368" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L369" class="blob-num js-line-number" data-line-number="369"></td>
        <td id="LC369" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">/*</span> Example: never batcache for this host</span></span></td>
      </tr>
      <tr>
        <td id="L370" class="blob-num js-line-number" data-line-number="370"></td>
        <td id="LC370" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">if ( $_SERVER[&#39;HTTP_HOST&#39;] == &#39;do-not-batcache-me.com&#39; )</span></span></td>
      </tr>
      <tr>
        <td id="L371" class="blob-num js-line-number" data-line-number="371"></td>
        <td id="LC371" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">	return;</span></span></td>
      </tr>
      <tr>
        <td id="L372" class="blob-num js-line-number" data-line-number="372"></td>
        <td id="LC372" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">*/</span></span></span></td>
      </tr>
      <tr>
        <td id="L373" class="blob-num js-line-number" data-line-number="373"></td>
        <td id="LC373" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L374" class="blob-num js-line-number" data-line-number="374"></td>
        <td id="LC374" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">/*</span> Example: batcache everything on this host regardless of traffic level</span></span></td>
      </tr>
      <tr>
        <td id="L375" class="blob-num js-line-number" data-line-number="375"></td>
        <td id="LC375" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">if ( $_SERVER[&#39;HTTP_HOST&#39;] == &#39;always-batcache-me.com&#39; )</span></span></td>
      </tr>
      <tr>
        <td id="L376" class="blob-num js-line-number" data-line-number="376"></td>
        <td id="LC376" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">	return;</span></span></td>
      </tr>
      <tr>
        <td id="L377" class="blob-num js-line-number" data-line-number="377"></td>
        <td id="LC377" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">*/</span></span></span></td>
      </tr>
      <tr>
        <td id="L378" class="blob-num js-line-number" data-line-number="378"></td>
        <td id="LC378" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L379" class="blob-num js-line-number" data-line-number="379"></td>
        <td id="LC379" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">/*</span> Example: If you sometimes serve variants dynamically (e.g. referrer search term highlighting) you probably don&#39;t want to batcache those variants. Remember this code is run very early in wp-settings.php so plugins are not yet loaded. You will get a fatal error if you try to call an undefined function. Either include your plugin now or define a test function in this file.</span></span></td>
      </tr>
      <tr>
        <td id="L380" class="blob-num js-line-number" data-line-number="380"></td>
        <td id="LC380" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">if ( include_once( &#39;plugins/searchterm-highlighter.php&#39;) &amp;&amp; referrer_has_search_terms() )</span></span></td>
      </tr>
      <tr>
        <td id="L381" class="blob-num js-line-number" data-line-number="381"></td>
        <td id="LC381" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">	return;</span></span></td>
      </tr>
      <tr>
        <td id="L382" class="blob-num js-line-number" data-line-number="382"></td>
        <td id="LC382" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">*/</span></span></span></td>
      </tr>
      <tr>
        <td id="L383" class="blob-num js-line-number" data-line-number="383"></td>
        <td id="LC383" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L384" class="blob-num js-line-number" data-line-number="384"></td>
        <td id="LC384" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> Disabled</span></span></td>
      </tr>
      <tr>
        <td id="L385" class="blob-num js-line-number" data-line-number="385"></td>
        <td id="LC385" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> ( <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">max_age</span> <span class="pl-k">&lt;</span> <span class="pl-c1">1</span> )</span></td>
      </tr>
      <tr>
        <td id="L386" class="blob-num js-line-number" data-line-number="386"></td>
        <td id="LC386" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">return</span>;</span></td>
      </tr>
      <tr>
        <td id="L387" class="blob-num js-line-number" data-line-number="387"></td>
        <td id="LC387" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L388" class="blob-num js-line-number" data-line-number="388"></td>
        <td id="LC388" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> Make sure we can increment. If not, turn off the traffic sensor.</span></span></td>
      </tr>
      <tr>
        <td id="L389" class="blob-num js-line-number" data-line-number="389"></td>
        <td id="LC389" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> ( <span class="pl-k">!</span> <span class="pl-c1">method_exists</span>( <span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>wp_object_cache<span class="pl-pds">&#39;</span></span>], <span class="pl-s"><span class="pl-pds">&#39;</span>incr<span class="pl-pds">&#39;</span></span> ) )</span></td>
      </tr>
      <tr>
        <td id="L390" class="blob-num js-line-number" data-line-number="390"></td>
        <td id="LC390" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">times</span> <span class="pl-k">=</span> <span class="pl-c1">0</span>;</span></td>
      </tr>
      <tr>
        <td id="L391" class="blob-num js-line-number" data-line-number="391"></td>
        <td id="LC391" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L392" class="blob-num js-line-number" data-line-number="392"></td>
        <td id="LC392" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> Necessary to prevent clients using cached version after login cookies set. If this is a problem, comment it out and remove all Last-Modified headers.</span></span></td>
      </tr>
      <tr>
        <td id="L393" class="blob-num js-line-number" data-line-number="393"></td>
        <td id="LC393" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c1">header</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>Vary: Cookie<span class="pl-pds">&#39;</span></span>, <span class="pl-c1">false</span>);</span></td>
      </tr>
      <tr>
        <td id="L394" class="blob-num js-line-number" data-line-number="394"></td>
        <td id="LC394" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L395" class="blob-num js-line-number" data-line-number="395"></td>
        <td id="LC395" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> Things that define a unique page.</span></span></td>
      </tr>
      <tr>
        <td id="L396" class="blob-num js-line-number" data-line-number="396"></td>
        <td id="LC396" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> ( <span class="pl-c1">isset</span>( <span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>QUERY_STRING<span class="pl-pds">&#39;</span></span>] ) )</span></td>
      </tr>
      <tr>
        <td id="L397" class="blob-num js-line-number" data-line-number="397"></td>
        <td id="LC397" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c1">parse_str</span>(<span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>QUERY_STRING<span class="pl-pds">&#39;</span></span>], <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">query</span>);</span></td>
      </tr>
      <tr>
        <td id="L398" class="blob-num js-line-number" data-line-number="398"></td>
        <td id="LC398" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L399" class="blob-num js-line-number" data-line-number="399"></td>
        <td id="LC399" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">keys</span> <span class="pl-k">=</span> <span class="pl-c1">array</span>(</span></td>
      </tr>
      <tr>
        <td id="L400" class="blob-num js-line-number" data-line-number="400"></td>
        <td id="LC400" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-s"><span class="pl-pds">&#39;</span>host<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>HTTP_HOST<span class="pl-pds">&#39;</span></span>],</span></td>
      </tr>
      <tr>
        <td id="L401" class="blob-num js-line-number" data-line-number="401"></td>
        <td id="LC401" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-s"><span class="pl-pds">&#39;</span>method<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>REQUEST_METHOD<span class="pl-pds">&#39;</span></span>],</span></td>
      </tr>
      <tr>
        <td id="L402" class="blob-num js-line-number" data-line-number="402"></td>
        <td id="LC402" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-s"><span class="pl-pds">&#39;</span>path<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> ( <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">pos</span> <span class="pl-k">=</span> <span class="pl-c1">strpos</span>(<span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>REQUEST_URI<span class="pl-pds">&#39;</span></span>], <span class="pl-s"><span class="pl-pds">&#39;</span>?<span class="pl-pds">&#39;</span></span>) ) ? <span class="pl-c1">substr</span>(<span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>REQUEST_URI<span class="pl-pds">&#39;</span></span>], <span class="pl-c1">0</span>, <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">pos</span>) : <span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>REQUEST_URI<span class="pl-pds">&#39;</span></span>],</span></td>
      </tr>
      <tr>
        <td id="L403" class="blob-num js-line-number" data-line-number="403"></td>
        <td id="LC403" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-s"><span class="pl-pds">&#39;</span>query<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">query</span>,</span></td>
      </tr>
      <tr>
        <td id="L404" class="blob-num js-line-number" data-line-number="404"></td>
        <td id="LC404" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-s"><span class="pl-pds">&#39;</span>extra<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">unique</span></span></td>
      </tr>
      <tr>
        <td id="L405" class="blob-num js-line-number" data-line-number="405"></td>
        <td id="LC405" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">);</span></td>
      </tr>
      <tr>
        <td id="L406" class="blob-num js-line-number" data-line-number="406"></td>
        <td id="LC406" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L407" class="blob-num js-line-number" data-line-number="407"></td>
        <td id="LC407" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> ( <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span>is_ssl() )</span></td>
      </tr>
      <tr>
        <td id="L408" class="blob-num js-line-number" data-line-number="408"></td>
        <td id="LC408" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">keys</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>ssl<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L409" class="blob-num js-line-number" data-line-number="409"></td>
        <td id="LC409" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L410" class="blob-num js-line-number" data-line-number="410"></td>
        <td id="LC410" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> Recreate the permalink from the URL</span></span></td>
      </tr>
      <tr>
        <td id="L411" class="blob-num js-line-number" data-line-number="411"></td>
        <td id="LC411" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">permalink</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>http://<span class="pl-pds">&#39;</span></span> <span class="pl-k">.</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">keys</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>host<span class="pl-pds">&#39;</span></span>] <span class="pl-k">.</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">keys</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>path<span class="pl-pds">&#39;</span></span>] <span class="pl-k">.</span> ( <span class="pl-c1">isset</span>(<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">keys</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>query<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>p<span class="pl-pds">&#39;</span></span>]) ? <span class="pl-s"><span class="pl-pds">&quot;</span>?p=<span class="pl-pds">&quot;</span></span> <span class="pl-k">.</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">keys</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>query<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>p<span class="pl-pds">&#39;</span></span>] : <span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span> );</span></td>
      </tr>
      <tr>
        <td id="L412" class="blob-num js-line-number" data-line-number="412"></td>
        <td id="LC412" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">url_key</span> <span class="pl-k">=</span> <span class="pl-c1">md5</span>(<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">permalink</span>);</span></td>
      </tr>
      <tr>
        <td id="L413" class="blob-num js-line-number" data-line-number="413"></td>
        <td id="LC413" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span>configure_groups();</span></td>
      </tr>
      <tr>
        <td id="L414" class="blob-num js-line-number" data-line-number="414"></td>
        <td id="LC414" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">url_version</span> <span class="pl-k">=</span> (<span class="pl-k">int</span>) wp_cache_get(<span class="pl-s"><span class="pl-pds">&quot;</span>{<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">url_key</span>}_version<span class="pl-pds">&quot;</span></span>, <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">group</span>);</span></td>
      </tr>
      <tr>
        <td id="L415" class="blob-num js-line-number" data-line-number="415"></td>
        <td id="LC415" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span>do_variants();</span></td>
      </tr>
      <tr>
        <td id="L416" class="blob-num js-line-number" data-line-number="416"></td>
        <td id="LC416" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span>generate_keys();</span></td>
      </tr>
      <tr>
        <td id="L417" class="blob-num js-line-number" data-line-number="417"></td>
        <td id="LC417" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L418" class="blob-num js-line-number" data-line-number="418"></td>
        <td id="LC418" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> Get the batcache</span></span></td>
      </tr>
      <tr>
        <td id="L419" class="blob-num js-line-number" data-line-number="419"></td>
        <td id="LC419" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span> <span class="pl-k">=</span> wp_cache_get(<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">key</span>, <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">group</span>);</span></td>
      </tr>
      <tr>
        <td id="L420" class="blob-num js-line-number" data-line-number="420"></td>
        <td id="LC420" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L421" class="blob-num js-line-number" data-line-number="421"></td>
        <td id="LC421" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> ( <span class="pl-c1">isset</span>( <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>version<span class="pl-pds">&#39;</span></span>] ) <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>version<span class="pl-pds">&#39;</span></span>] <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">url_version</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L422" class="blob-num js-line-number" data-line-number="422"></td>
        <td id="LC422" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c"><span class="pl-c">//</span> Always refresh the cache if a newer version is available.</span></span></td>
      </tr>
      <tr>
        <td id="L423" class="blob-num js-line-number" data-line-number="423"></td>
        <td id="LC423" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">do</span> <span class="pl-k">=</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L424" class="blob-num js-line-number" data-line-number="424"></td>
        <td id="LC424" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">} <span class="pl-k">else</span> <span class="pl-k">if</span> ( <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">seconds</span> <span class="pl-k">&lt;</span> <span class="pl-c1">1</span> <span class="pl-k">||</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">times</span> <span class="pl-k">&lt;</span> <span class="pl-c1">2</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L425" class="blob-num js-line-number" data-line-number="425"></td>
        <td id="LC425" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c"><span class="pl-c">//</span> Are we only caching frequently-requested pages?</span></span></td>
      </tr>
      <tr>
        <td id="L426" class="blob-num js-line-number" data-line-number="426"></td>
        <td id="LC426" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">do</span> <span class="pl-k">=</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L427" class="blob-num js-line-number" data-line-number="427"></td>
        <td id="LC427" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">} <span class="pl-k">else</span> {</span></td>
      </tr>
      <tr>
        <td id="L428" class="blob-num js-line-number" data-line-number="428"></td>
        <td id="LC428" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c"><span class="pl-c">//</span> No batcache item found, or ready to sample traffic again at the end of the batcache life?</span></span></td>
      </tr>
      <tr>
        <td id="L429" class="blob-num js-line-number" data-line-number="429"></td>
        <td id="LC429" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> ( <span class="pl-k">!</span><span class="pl-c1">is_array</span>(<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>) <span class="pl-k">||</span> <span class="pl-c1">time</span>() <span class="pl-k">&gt;=</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>time<span class="pl-pds">&#39;</span></span>] <span class="pl-k">+</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">max_age</span> <span class="pl-k">-</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">seconds</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L430" class="blob-num js-line-number" data-line-number="430"></td>
        <td id="LC430" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		wp_cache_add(<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">req_key</span>, <span class="pl-c1">0</span>, <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">group</span>);</span></td>
      </tr>
      <tr>
        <td id="L431" class="blob-num js-line-number" data-line-number="431"></td>
        <td id="LC431" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">requests</span> <span class="pl-k">=</span> wp_cache_incr(<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">req_key</span>, <span class="pl-c1">1</span>, <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">group</span>);</span></td>
      </tr>
      <tr>
        <td id="L432" class="blob-num js-line-number" data-line-number="432"></td>
        <td id="LC432" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L433" class="blob-num js-line-number" data-line-number="433"></td>
        <td id="LC433" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> ( <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">requests</span> <span class="pl-k">&gt;=</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">times</span> <span class="pl-k">&amp;&amp;</span></span></td>
      </tr>
      <tr>
        <td id="L434" class="blob-num js-line-number" data-line-number="434"></td>
        <td id="LC434" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-c1">time</span>() <span class="pl-k">&gt;=</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>time<span class="pl-pds">&#39;</span></span>] <span class="pl-k">+</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>max_age<span class="pl-pds">&#39;</span></span>]</span></td>
      </tr>
      <tr>
        <td id="L435" class="blob-num js-line-number" data-line-number="435"></td>
        <td id="LC435" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		) {</span></td>
      </tr>
      <tr>
        <td id="L436" class="blob-num js-line-number" data-line-number="436"></td>
        <td id="LC436" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			wp_cache_delete( <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">req_key</span>, <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">group</span> );</span></td>
      </tr>
      <tr>
        <td id="L437" class="blob-num js-line-number" data-line-number="437"></td>
        <td id="LC437" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">do</span> <span class="pl-k">=</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L438" class="blob-num js-line-number" data-line-number="438"></td>
        <td id="LC438" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		} <span class="pl-k">else</span> {</span></td>
      </tr>
      <tr>
        <td id="L439" class="blob-num js-line-number" data-line-number="439"></td>
        <td id="LC439" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">do</span> <span class="pl-k">=</span> <span class="pl-c1">false</span>;</span></td>
      </tr>
      <tr>
        <td id="L440" class="blob-num js-line-number" data-line-number="440"></td>
        <td id="LC440" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L441" class="blob-num js-line-number" data-line-number="441"></td>
        <td id="LC441" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L442" class="blob-num js-line-number" data-line-number="442"></td>
        <td id="LC442" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L443" class="blob-num js-line-number" data-line-number="443"></td>
        <td id="LC443" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L444" class="blob-num js-line-number" data-line-number="444"></td>
        <td id="LC444" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> Obtain cache generation lock</span></span></td>
      </tr>
      <tr>
        <td id="L445" class="blob-num js-line-number" data-line-number="445"></td>
        <td id="LC445" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> ( <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">do</span> )</span></td>
      </tr>
      <tr>
        <td id="L446" class="blob-num js-line-number" data-line-number="446"></td>
        <td id="LC446" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">genlock</span> <span class="pl-k">=</span> wp_cache_add(<span class="pl-s"><span class="pl-pds">&quot;</span>{<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">url_key</span>}_genlock<span class="pl-pds">&quot;</span></span>, <span class="pl-c1">1</span>, <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">group</span>, <span class="pl-c1">10</span>);</span></td>
      </tr>
      <tr>
        <td id="L447" class="blob-num js-line-number" data-line-number="447"></td>
        <td id="LC447" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L448" class="blob-num js-line-number" data-line-number="448"></td>
        <td id="LC448" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> ( <span class="pl-c1">isset</span>( <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>time<span class="pl-pds">&#39;</span></span>] ) <span class="pl-k">&amp;&amp;</span> <span class="pl-c"><span class="pl-c">//</span> We have cache</span></span></td>
      </tr>
      <tr>
        <td id="L449" class="blob-num js-line-number" data-line-number="449"></td>
        <td id="LC449" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">!</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">genlock</span> <span class="pl-k">&amp;&amp;</span>            <span class="pl-c"><span class="pl-c">//</span> We have not obtained cache regeneration lock</span></span></td>
      </tr>
      <tr>
        <td id="L450" class="blob-num js-line-number" data-line-number="450"></td>
        <td id="LC450" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	(</span></td>
      </tr>
      <tr>
        <td id="L451" class="blob-num js-line-number" data-line-number="451"></td>
        <td id="LC451" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">time</span>() <span class="pl-k">&lt;</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>time<span class="pl-pds">&#39;</span></span>] <span class="pl-k">+</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>max_age<span class="pl-pds">&#39;</span></span>] <span class="pl-k">||</span> <span class="pl-c"><span class="pl-c">//</span> Batcached page that hasn&#39;t expired ||</span></span></td>
      </tr>
      <tr>
        <td id="L452" class="blob-num js-line-number" data-line-number="452"></td>
        <td id="LC452" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		( <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">do</span> <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">use_stale</span> )                          <span class="pl-c"><span class="pl-c">//</span> Regenerating it in another request and can use stale cache</span></span></td>
      </tr>
      <tr>
        <td id="L453" class="blob-num js-line-number" data-line-number="453"></td>
        <td id="LC453" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	)</span></td>
      </tr>
      <tr>
        <td id="L454" class="blob-num js-line-number" data-line-number="454"></td>
        <td id="LC454" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">) {</span></td>
      </tr>
      <tr>
        <td id="L455" class="blob-num js-line-number" data-line-number="455"></td>
        <td id="LC455" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c"><span class="pl-c">//</span> Issue redirect if cached and enabled</span></span></td>
      </tr>
      <tr>
        <td id="L456" class="blob-num js-line-number" data-line-number="456"></td>
        <td id="LC456" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> ( <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>redirect_status<span class="pl-pds">&#39;</span></span>] <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>redirect_location<span class="pl-pds">&#39;</span></span>] <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache_redirects</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L457" class="blob-num js-line-number" data-line-number="457"></td>
        <td id="LC457" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$status</span> <span class="pl-k">=</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>redirect_status<span class="pl-pds">&#39;</span></span>];</span></td>
      </tr>
      <tr>
        <td id="L458" class="blob-num js-line-number" data-line-number="458"></td>
        <td id="LC458" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$location</span> <span class="pl-k">=</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>redirect_location<span class="pl-pds">&#39;</span></span>];</span></td>
      </tr>
      <tr>
        <td id="L459" class="blob-num js-line-number" data-line-number="459"></td>
        <td id="LC459" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c"><span class="pl-c">//</span> From vars.php</span></span></td>
      </tr>
      <tr>
        <td id="L460" class="blob-num js-line-number" data-line-number="460"></td>
        <td id="LC460" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$is_IIS</span> <span class="pl-k">=</span> (<span class="pl-c1">strpos</span>(<span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>SERVER_SOFTWARE<span class="pl-pds">&#39;</span></span>], <span class="pl-s"><span class="pl-pds">&#39;</span>Microsoft-IIS<span class="pl-pds">&#39;</span></span>) <span class="pl-k">!</span><span class="pl-k">==</span> <span class="pl-c1">false</span> <span class="pl-k">||</span> <span class="pl-c1">strpos</span>(<span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>SERVER_SOFTWARE<span class="pl-pds">&#39;</span></span>], <span class="pl-s"><span class="pl-pds">&#39;</span>ExpressionDevServer<span class="pl-pds">&#39;</span></span>) <span class="pl-k">!</span><span class="pl-k">==</span> <span class="pl-c1">false</span>);</span></td>
      </tr>
      <tr>
        <td id="L461" class="blob-num js-line-number" data-line-number="461"></td>
        <td id="LC461" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L462" class="blob-num js-line-number" data-line-number="462"></td>
        <td id="LC462" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span>do_headers( <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">headers</span> );</span></td>
      </tr>
      <tr>
        <td id="L463" class="blob-num js-line-number" data-line-number="463"></td>
        <td id="LC463" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> ( <span class="pl-smi">$is_IIS</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L464" class="blob-num js-line-number" data-line-number="464"></td>
        <td id="LC464" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-c1">header</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>Refresh: 0;url=<span class="pl-smi">$location</span><span class="pl-pds">&quot;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L465" class="blob-num js-line-number" data-line-number="465"></td>
        <td id="LC465" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		} <span class="pl-k">else</span> {</span></td>
      </tr>
      <tr>
        <td id="L466" class="blob-num js-line-number" data-line-number="466"></td>
        <td id="LC466" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">if</span> ( <span class="pl-c1">php_sapi_name</span>() <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>cgi-fcgi<span class="pl-pds">&#39;</span></span> ) {</span></td>
      </tr>
      <tr>
        <td id="L467" class="blob-num js-line-number" data-line-number="467"></td>
        <td id="LC467" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				<span class="pl-smi">$texts</span> <span class="pl-k">=</span> <span class="pl-c1">array</span>(</span></td>
      </tr>
      <tr>
        <td id="L468" class="blob-num js-line-number" data-line-number="468"></td>
        <td id="LC468" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">					<span class="pl-c1">300</span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>Multiple Choices<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L469" class="blob-num js-line-number" data-line-number="469"></td>
        <td id="LC469" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">					<span class="pl-c1">301</span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>Moved Permanently<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L470" class="blob-num js-line-number" data-line-number="470"></td>
        <td id="LC470" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">					<span class="pl-c1">302</span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>Found<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L471" class="blob-num js-line-number" data-line-number="471"></td>
        <td id="LC471" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">					<span class="pl-c1">303</span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>See Other<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L472" class="blob-num js-line-number" data-line-number="472"></td>
        <td id="LC472" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">					<span class="pl-c1">304</span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>Not Modified<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L473" class="blob-num js-line-number" data-line-number="473"></td>
        <td id="LC473" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">					<span class="pl-c1">305</span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>Use Proxy<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L474" class="blob-num js-line-number" data-line-number="474"></td>
        <td id="LC474" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">					<span class="pl-c1">306</span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>Reserved<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L475" class="blob-num js-line-number" data-line-number="475"></td>
        <td id="LC475" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">					<span class="pl-c1">307</span> <span class="pl-k">=&gt;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>Temporary Redirect<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L476" class="blob-num js-line-number" data-line-number="476"></td>
        <td id="LC476" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				);</span></td>
      </tr>
      <tr>
        <td id="L477" class="blob-num js-line-number" data-line-number="477"></td>
        <td id="LC477" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				<span class="pl-smi">$protocol</span> <span class="pl-k">=</span> <span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&quot;</span>SERVER_PROTOCOL<span class="pl-pds">&quot;</span></span>];</span></td>
      </tr>
      <tr>
        <td id="L478" class="blob-num js-line-number" data-line-number="478"></td>
        <td id="LC478" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				<span class="pl-k">if</span> ( <span class="pl-s"><span class="pl-pds">&#39;</span>HTTP/1.1<span class="pl-pds">&#39;</span></span> <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-smi">$protocol</span> <span class="pl-k">&amp;&amp;</span> <span class="pl-s"><span class="pl-pds">&#39;</span>HTTP/1.0<span class="pl-pds">&#39;</span></span> <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-smi">$protocol</span> )</span></td>
      </tr>
      <tr>
        <td id="L479" class="blob-num js-line-number" data-line-number="479"></td>
        <td id="LC479" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">					<span class="pl-smi">$protocol</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>HTTP/1.0<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L480" class="blob-num js-line-number" data-line-number="480"></td>
        <td id="LC480" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				<span class="pl-k">if</span> ( <span class="pl-c1">isset</span>(<span class="pl-smi">$texts</span>[<span class="pl-smi">$status</span>]) )</span></td>
      </tr>
      <tr>
        <td id="L481" class="blob-num js-line-number" data-line-number="481"></td>
        <td id="LC481" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">					<span class="pl-c1">header</span>(<span class="pl-s"><span class="pl-pds">&quot;</span><span class="pl-smi">$protocol</span> <span class="pl-smi">$status</span> <span class="pl-pds">&quot;</span></span> <span class="pl-k">.</span> <span class="pl-smi">$texts</span>[<span class="pl-smi">$status</span>]);</span></td>
      </tr>
      <tr>
        <td id="L482" class="blob-num js-line-number" data-line-number="482"></td>
        <td id="LC482" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">				<span class="pl-k">else</span></span></td>
      </tr>
      <tr>
        <td id="L483" class="blob-num js-line-number" data-line-number="483"></td>
        <td id="LC483" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">					<span class="pl-c1">header</span>(<span class="pl-s"><span class="pl-pds">&quot;</span><span class="pl-smi">$protocol</span> 302 Found<span class="pl-pds">&quot;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L484" class="blob-num js-line-number" data-line-number="484"></td>
        <td id="LC484" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			}</span></td>
      </tr>
      <tr>
        <td id="L485" class="blob-num js-line-number" data-line-number="485"></td>
        <td id="LC485" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-c1">header</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>Location: <span class="pl-smi">$location</span><span class="pl-pds">&quot;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L486" class="blob-num js-line-number" data-line-number="486"></td>
        <td id="LC486" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L487" class="blob-num js-line-number" data-line-number="487"></td>
        <td id="LC487" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">exit</span>;</span></td>
      </tr>
      <tr>
        <td id="L488" class="blob-num js-line-number" data-line-number="488"></td>
        <td id="LC488" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L489" class="blob-num js-line-number" data-line-number="489"></td>
        <td id="LC489" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L490" class="blob-num js-line-number" data-line-number="490"></td>
        <td id="LC490" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c"><span class="pl-c">//</span> Respect ETags served with feeds.</span></span></td>
      </tr>
      <tr>
        <td id="L491" class="blob-num js-line-number" data-line-number="491"></td>
        <td id="LC491" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$three04</span> <span class="pl-k">=</span> <span class="pl-c1">false</span>;</span></td>
      </tr>
      <tr>
        <td id="L492" class="blob-num js-line-number" data-line-number="492"></td>
        <td id="LC492" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> ( <span class="pl-c1">isset</span>( <span class="pl-smi">$SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>HTTP_IF_NONE_MATCH<span class="pl-pds">&#39;</span></span>] ) <span class="pl-k">&amp;&amp;</span> <span class="pl-c1">isset</span>( <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>headers<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>ETag<span class="pl-pds">&#39;</span></span>][<span class="pl-c1">0</span>] ) <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>HTTP_IF_NONE_MATCH<span class="pl-pds">&#39;</span></span>] <span class="pl-k">==</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>headers<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>ETag<span class="pl-pds">&#39;</span></span>][<span class="pl-c1">0</span>] )</span></td>
      </tr>
      <tr>
        <td id="L493" class="blob-num js-line-number" data-line-number="493"></td>
        <td id="LC493" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$three04</span> <span class="pl-k">=</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L494" class="blob-num js-line-number" data-line-number="494"></td>
        <td id="LC494" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L495" class="blob-num js-line-number" data-line-number="495"></td>
        <td id="LC495" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c"><span class="pl-c">//</span> Respect If-Modified-Since.</span></span></td>
      </tr>
      <tr>
        <td id="L496" class="blob-num js-line-number" data-line-number="496"></td>
        <td id="LC496" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> ( <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache_control</span> <span class="pl-k">&amp;&amp;</span> <span class="pl-c1">isset</span>(<span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>HTTP_IF_MODIFIED_SINCE<span class="pl-pds">&#39;</span></span>]) ) {</span></td>
      </tr>
      <tr>
        <td id="L497" class="blob-num js-line-number" data-line-number="497"></td>
        <td id="LC497" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$client_time</span> <span class="pl-k">=</span> <span class="pl-c1">strtotime</span>(<span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>HTTP_IF_MODIFIED_SINCE<span class="pl-pds">&#39;</span></span>]);</span></td>
      </tr>
      <tr>
        <td id="L498" class="blob-num js-line-number" data-line-number="498"></td>
        <td id="LC498" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> ( <span class="pl-c1">isset</span>(<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>headers<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>Last-Modified<span class="pl-pds">&#39;</span></span>][<span class="pl-c1">0</span>]) )</span></td>
      </tr>
      <tr>
        <td id="L499" class="blob-num js-line-number" data-line-number="499"></td>
        <td id="LC499" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$cache_time</span> <span class="pl-k">=</span> <span class="pl-c1">strtotime</span>(<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>headers<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>Last-Modified<span class="pl-pds">&#39;</span></span>][<span class="pl-c1">0</span>]);</span></td>
      </tr>
      <tr>
        <td id="L500" class="blob-num js-line-number" data-line-number="500"></td>
        <td id="LC500" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">else</span></span></td>
      </tr>
      <tr>
        <td id="L501" class="blob-num js-line-number" data-line-number="501"></td>
        <td id="LC501" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$cache_time</span> <span class="pl-k">=</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>time<span class="pl-pds">&#39;</span></span>];</span></td>
      </tr>
      <tr>
        <td id="L502" class="blob-num js-line-number" data-line-number="502"></td>
        <td id="LC502" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L503" class="blob-num js-line-number" data-line-number="503"></td>
        <td id="LC503" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> ( <span class="pl-smi">$client_time</span> <span class="pl-k">&gt;=</span> <span class="pl-smi">$cache_time</span> )</span></td>
      </tr>
      <tr>
        <td id="L504" class="blob-num js-line-number" data-line-number="504"></td>
        <td id="LC504" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$three04</span> <span class="pl-k">=</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L505" class="blob-num js-line-number" data-line-number="505"></td>
        <td id="LC505" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L506" class="blob-num js-line-number" data-line-number="506"></td>
        <td id="LC506" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L507" class="blob-num js-line-number" data-line-number="507"></td>
        <td id="LC507" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c"><span class="pl-c">//</span> Use the batcache save time for Last-Modified so we can issue &quot;304 Not Modified&quot; but don&#39;t clobber a cached Last-Modified header.</span></span></td>
      </tr>
      <tr>
        <td id="L508" class="blob-num js-line-number" data-line-number="508"></td>
        <td id="LC508" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> ( <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache_control</span> <span class="pl-k">&amp;&amp;</span> <span class="pl-k">!</span><span class="pl-c1">isset</span>(<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>headers<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>Last-Modified<span class="pl-pds">&#39;</span></span>][<span class="pl-c1">0</span>]) ) {</span></td>
      </tr>
      <tr>
        <td id="L509" class="blob-num js-line-number" data-line-number="509"></td>
        <td id="LC509" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">header</span>( <span class="pl-s"><span class="pl-pds">&#39;</span>Last-Modified: <span class="pl-pds">&#39;</span></span> <span class="pl-k">.</span> <span class="pl-c1">gmdate</span>( <span class="pl-s"><span class="pl-pds">&#39;</span>D, d M Y H:i:s<span class="pl-pds">&#39;</span></span>, <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>time<span class="pl-pds">&#39;</span></span>] ) <span class="pl-k">.</span> <span class="pl-s"><span class="pl-pds">&#39;</span> GMT<span class="pl-pds">&#39;</span></span>, <span class="pl-c1">true</span> );</span></td>
      </tr>
      <tr>
        <td id="L510" class="blob-num js-line-number" data-line-number="510"></td>
        <td id="LC510" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">header</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>Cache-Control: max-age=<span class="pl-pds">&#39;</span></span> <span class="pl-k">.</span> (<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>max_age<span class="pl-pds">&#39;</span></span>] <span class="pl-k">-</span> <span class="pl-c1">time</span>() <span class="pl-k">+</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>time<span class="pl-pds">&#39;</span></span>]) <span class="pl-k">.</span> <span class="pl-s"><span class="pl-pds">&#39;</span>, must-revalidate<span class="pl-pds">&#39;</span></span>, <span class="pl-c1">true</span>);</span></td>
      </tr>
      <tr>
        <td id="L511" class="blob-num js-line-number" data-line-number="511"></td>
        <td id="LC511" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L512" class="blob-num js-line-number" data-line-number="512"></td>
        <td id="LC512" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L513" class="blob-num js-line-number" data-line-number="513"></td>
        <td id="LC513" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c"><span class="pl-c">//</span> Add some debug info just before &lt;/head&gt;</span></span></td>
      </tr>
      <tr>
        <td id="L514" class="blob-num js-line-number" data-line-number="514"></td>
        <td id="LC514" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> ( <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">debug</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L515" class="blob-num js-line-number" data-line-number="515"></td>
        <td id="LC515" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span>add_debug_from_cache();</span></td>
      </tr>
      <tr>
        <td id="L516" class="blob-num js-line-number" data-line-number="516"></td>
        <td id="LC516" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L517" class="blob-num js-line-number" data-line-number="517"></td>
        <td id="LC517" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L518" class="blob-num js-line-number" data-line-number="518"></td>
        <td id="LC518" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span>do_headers( <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">headers</span>, <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>headers<span class="pl-pds">&#39;</span></span>] );</span></td>
      </tr>
      <tr>
        <td id="L519" class="blob-num js-line-number" data-line-number="519"></td>
        <td id="LC519" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L520" class="blob-num js-line-number" data-line-number="520"></td>
        <td id="LC520" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> ( <span class="pl-smi">$three04</span> ) {</span></td>
      </tr>
      <tr>
        <td id="L521" class="blob-num js-line-number" data-line-number="521"></td>
        <td id="LC521" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">header</span>(<span class="pl-s"><span class="pl-pds">&quot;</span>HTTP/1.1 304 Not Modified<span class="pl-pds">&quot;</span></span>, <span class="pl-c1">true</span>, <span class="pl-c1">304</span>);</span></td>
      </tr>
      <tr>
        <td id="L522" class="blob-num js-line-number" data-line-number="522"></td>
        <td id="LC522" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">die</span>;</span></td>
      </tr>
      <tr>
        <td id="L523" class="blob-num js-line-number" data-line-number="523"></td>
        <td id="LC523" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L524" class="blob-num js-line-number" data-line-number="524"></td>
        <td id="LC524" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L525" class="blob-num js-line-number" data-line-number="525"></td>
        <td id="LC525" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> ( <span class="pl-k">!</span><span class="pl-c1">empty</span>(<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>status_header<span class="pl-pds">&#39;</span></span>]) )</span></td>
      </tr>
      <tr>
        <td id="L526" class="blob-num js-line-number" data-line-number="526"></td>
        <td id="LC526" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">header</span>(<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>status_header<span class="pl-pds">&#39;</span></span>], <span class="pl-c1">true</span>);</span></td>
      </tr>
      <tr>
        <td id="L527" class="blob-num js-line-number" data-line-number="527"></td>
        <td id="LC527" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L528" class="blob-num js-line-number" data-line-number="528"></td>
        <td id="LC528" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	batcache_stats( <span class="pl-s"><span class="pl-pds">&#39;</span>batcache<span class="pl-pds">&#39;</span></span>, <span class="pl-s"><span class="pl-pds">&#39;</span>total_cached_views<span class="pl-pds">&#39;</span></span> );</span></td>
      </tr>
      <tr>
        <td id="L529" class="blob-num js-line-number" data-line-number="529"></td>
        <td id="LC529" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L530" class="blob-num js-line-number" data-line-number="530"></td>
        <td id="LC530" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c"><span class="pl-c">//</span> Have you ever heard a death rattle before?</span></span></td>
      </tr>
      <tr>
        <td id="L531" class="blob-num js-line-number" data-line-number="531"></td>
        <td id="LC531" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">die</span>(<span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">cache</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>output<span class="pl-pds">&#39;</span></span>]);</span></td>
      </tr>
      <tr>
        <td id="L532" class="blob-num js-line-number" data-line-number="532"></td>
        <td id="LC532" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L533" class="blob-num js-line-number" data-line-number="533"></td>
        <td id="LC533" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L534" class="blob-num js-line-number" data-line-number="534"></td>
        <td id="LC534" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> Didn&#39;t meet the minimum condition?</span></span></td>
      </tr>
      <tr>
        <td id="L535" class="blob-num js-line-number" data-line-number="535"></td>
        <td id="LC535" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> ( <span class="pl-k">!</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">do</span> <span class="pl-k">||</span> <span class="pl-k">!</span> <span class="pl-smi">$batcache</span><span class="pl-k">-&gt;</span><span class="pl-smi">genlock</span> )</span></td>
      </tr>
      <tr>
        <td id="L536" class="blob-num js-line-number" data-line-number="536"></td>
        <td id="LC536" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">return</span>;</span></td>
      </tr>
      <tr>
        <td id="L537" class="blob-num js-line-number" data-line-number="537"></td>
        <td id="LC537" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L538" class="blob-num js-line-number" data-line-number="538"></td>
        <td id="LC538" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span>WordPress 4.7 changes how filters are hooked. Since WordPress 4.6 add_filter can be used in advanced-cache.php. Previous behaviour is kept for backwards compatability with WP &lt; 4.6</span></span></td>
      </tr>
      <tr>
        <td id="L539" class="blob-num js-line-number" data-line-number="539"></td>
        <td id="LC539" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> ( <span class="pl-c1">function_exists</span>( <span class="pl-s"><span class="pl-pds">&#39;</span>add_filter<span class="pl-pds">&#39;</span></span> ) ) {</span></td>
      </tr>
      <tr>
        <td id="L540" class="blob-num js-line-number" data-line-number="540"></td>
        <td id="LC540" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	add_filter( <span class="pl-s"><span class="pl-pds">&#39;</span>status_header<span class="pl-pds">&#39;</span></span>, <span class="pl-c1">array</span>( <span class="pl-k">&amp;</span><span class="pl-smi">$batcache</span>, <span class="pl-s"><span class="pl-pds">&#39;</span>status_header<span class="pl-pds">&#39;</span></span> ), <span class="pl-c1">10</span>, <span class="pl-c1">2</span> );</span></td>
      </tr>
      <tr>
        <td id="L541" class="blob-num js-line-number" data-line-number="541"></td>
        <td id="LC541" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	add_filter( <span class="pl-s"><span class="pl-pds">&#39;</span>wp_redirect_status<span class="pl-pds">&#39;</span></span>, <span class="pl-c1">array</span>( <span class="pl-k">&amp;</span><span class="pl-smi">$batcache</span>, <span class="pl-s"><span class="pl-pds">&#39;</span>redirect_status<span class="pl-pds">&#39;</span></span> ), <span class="pl-c1">10</span>, <span class="pl-c1">2</span> );</span></td>
      </tr>
      <tr>
        <td id="L542" class="blob-num js-line-number" data-line-number="542"></td>
        <td id="LC542" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">} <span class="pl-k">else</span> {</span></td>
      </tr>
      <tr>
        <td id="L543" class="blob-num js-line-number" data-line-number="543"></td>
        <td id="LC543" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$wp_filter</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>status_header<span class="pl-pds">&#39;</span></span>][<span class="pl-c1">10</span>][<span class="pl-s"><span class="pl-pds">&#39;</span>batcache<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-c1">array</span>( <span class="pl-s"><span class="pl-pds">&#39;</span>function<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-c1">array</span>(<span class="pl-k">&amp;</span><span class="pl-smi">$batcache</span>, <span class="pl-s"><span class="pl-pds">&#39;</span>status_header<span class="pl-pds">&#39;</span></span>), <span class="pl-s"><span class="pl-pds">&#39;</span>accepted_args<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-c1">2</span> );</span></td>
      </tr>
      <tr>
        <td id="L544" class="blob-num js-line-number" data-line-number="544"></td>
        <td id="LC544" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$wp_filter</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>wp_redirect_status<span class="pl-pds">&#39;</span></span>][<span class="pl-c1">10</span>][<span class="pl-s"><span class="pl-pds">&#39;</span>batcache<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-c1">array</span>( <span class="pl-s"><span class="pl-pds">&#39;</span>function<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-c1">array</span>(<span class="pl-k">&amp;</span><span class="pl-smi">$batcache</span>, <span class="pl-s"><span class="pl-pds">&#39;</span>redirect_status<span class="pl-pds">&#39;</span></span>), <span class="pl-s"><span class="pl-pds">&#39;</span>accepted_args<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-c1">2</span> );</span></td>
      </tr>
      <tr>
        <td id="L545" class="blob-num js-line-number" data-line-number="545"></td>
        <td id="LC545" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L546" class="blob-num js-line-number" data-line-number="546"></td>
        <td id="LC546" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L547" class="blob-num js-line-number" data-line-number="547"></td>
        <td id="LC547" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c1">ob_start</span>(<span class="pl-c1">array</span>(<span class="pl-k">&amp;</span><span class="pl-smi">$batcache</span>, <span class="pl-s"><span class="pl-pds">&#39;</span>ob<span class="pl-pds">&#39;</span></span>));</span></td>
      </tr>
      <tr>
        <td id="L548" class="blob-num js-line-number" data-line-number="548"></td>
        <td id="LC548" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L549" class="blob-num js-line-number" data-line-number="549"></td>
        <td id="LC549" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c"><span class="pl-c">//</span> It is safer to omit the final PHP closing tag.</span></span></td>
      </tr>
</table>

  <details class="details-reset details-overlay BlobToolbar position-absolute js-file-line-actions dropdown d-none" aria-hidden="true">
    <summary class="btn-octicon ml-0 px-2 p-0 bg-white border border-gray-dark rounded-1" aria-label="Inline file action toolbar">
      <svg class="octicon octicon-kebab-horizontal" viewBox="0 0 13 16" version="1.1" width="13" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M1.5 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm5 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM13 7.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/></svg>
    </summary>
    <details-menu>
      <ul class="BlobToolbar-dropdown dropdown-menu dropdown-menu-se mt-2" style="width:185px">
        <li><clipboard-copy role="menuitem" class="dropdown-item" id="js-copy-lines" style="cursor:pointer;" data-original-text="Copy lines">Copy lines</clipboard-copy></li>
        <li><clipboard-copy role="menuitem" class="dropdown-item" id="js-copy-permalink" style="cursor:pointer;" data-original-text="Copy permalink">Copy permalink</clipboard-copy></li>
        <li><a class="dropdown-item js-update-url-with-hash" id="js-view-git-blame" role="menuitem" href="/christianc1/wordpress-memcached/blame/b68494bc27cda683faa3418bd6b1be982c13c6c8/wp-content/advanced-cache.php">View git blame</a></li>
          <li><a class="dropdown-item" id="js-new-issue" role="menuitem" href="/christianc1/wordpress-memcached/issues/new">Reference in new issue</a></li>
      </ul>
    </details-menu>
  </details>

  </div>

    </div>

  

  <details class="details-reset details-overlay details-overlay-dark">
    <summary data-hotkey="l" aria-label="Jump to line"></summary>
    <details-dialog class="Box Box--overlay d-flex flex-column anim-fade-in fast linejump" aria-label="Jump to line">
      <!-- '"` --><!-- </textarea></xmp> --></option></form><form class="js-jump-to-line-form Box-body d-flex" action="" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="&#x2713;" />
        <input class="form-control flex-auto mr-3 linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" aria-label="Jump to line" autofocus>
        <button type="submit" class="btn" data-close-dialog>Go</button>
</form>    </details-dialog>
  </details>



  </div>
  <div class="modal-backdrop js-touch-events"></div>
</div>

    </main>
  </div>
  

  </div>

        
<div class="footer container-lg width-full p-responsive" role="contentinfo">
  <div class="position-relative d-flex flex-row-reverse flex-lg-row flex-wrap flex-lg-nowrap flex-justify-center flex-lg-justify-between pt-6 pb-2 mt-6 f6 text-gray border-top border-gray-light ">
    <ul class="list-style-none d-flex flex-wrap col-12 col-lg-5 flex-justify-center flex-lg-justify-between mb-2 mb-lg-0">
      <li class="mr-3 mr-lg-0">&copy; 2019 <span title="0.26585s from unicorn-646dd5dd84-k569x">GitHub</span>, Inc.</li>
        <li class="mr-3 mr-lg-0"><a data-ga-click="Footer, go to terms, text:terms" href="https://github.com/site/terms">Terms</a></li>
        <li class="mr-3 mr-lg-0"><a data-ga-click="Footer, go to privacy, text:privacy" href="https://github.com/site/privacy">Privacy</a></li>
        <li class="mr-3 mr-lg-0"><a data-ga-click="Footer, go to security, text:security" href="https://github.com/security">Security</a></li>
        <li class="mr-3 mr-lg-0"><a href="https://githubstatus.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
        <li><a data-ga-click="Footer, go to help, text:help" href="https://help.github.com">Help</a></li>
    </ul>

    <a aria-label="Homepage" title="GitHub" class="footer-octicon d-none d-lg-block mx-lg-4" href="https://github.com">
      <svg height="24" class="octicon octicon-mark-github" viewBox="0 0 16 16" version="1.1" width="24" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"/></svg>
</a>
   <ul class="list-style-none d-flex flex-wrap col-12 col-lg-5 flex-justify-center flex-lg-justify-between mb-2 mb-lg-0">
        <li class="mr-3 mr-lg-0"><a data-ga-click="Footer, go to contact, text:contact" href="https://github.com/contact">Contact GitHub</a></li>
        <li class="mr-3 mr-lg-0"><a href="https://github.com/pricing" data-ga-click="Footer, go to Pricing, text:Pricing">Pricing</a></li>
      <li class="mr-3 mr-lg-0"><a href="https://developer.github.com" data-ga-click="Footer, go to api, text:api">API</a></li>
      <li class="mr-3 mr-lg-0"><a href="https://training.github.com" data-ga-click="Footer, go to training, text:training">Training</a></li>
        <li class="mr-3 mr-lg-0"><a href="https://github.blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li><a data-ga-click="Footer, go to about, text:about" href="https://github.com/about">About</a></li>

    </ul>
  </div>
  <div class="d-flex flex-justify-center pb-6">
    <span class="f6 text-gray-light"></span>
  </div>
</div>



  <div id="ajax-error-message" class="ajax-error-message flash flash-error">
    <svg class="octicon octicon-alert" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.893 1.5c-.183-.31-.52-.5-.887-.5s-.703.19-.886.5L.138 13.499a.98.98 0 0 0 0 1.001c.193.31.53.501.886.501h13.964c.367 0 .704-.19.877-.5a1.03 1.03 0 0 0 .01-1.002L8.893 1.5zm.133 11.497H6.987v-2.003h2.039v2.003zm0-3.004H6.987V5.987h2.039v4.006z"/></svg>
    <button type="button" class="flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
      <svg class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg>
    </button>
    You can’t perform that action at this time.
  </div>


    <script crossorigin="anonymous" integrity="sha512-BlCvumXWTvpASEdhCGiahDUDf7Bwb8QXA2XnnSnqJ9QafxcNcrNYUNYS2wXmd3nEpO//+zlZa9DSV9zmu5MqRg==" type="application/javascript" src="https://github.githubassets.com/assets/compat-bootstrap-90c0ace0.js"></script>
    <script crossorigin="anonymous" integrity="sha512-ztF7ic695vgHWX5TmRR8mlaGAugquO7GpXmQI8quIbJJ/X4sUT0+0dkBoks46LFVC2qgVOcUVYTEIZ2m3kDRUg==" type="application/javascript" src="https://github.githubassets.com/assets/frameworks-f35ef5c6.js"></script>
    
    <script crossorigin="anonymous" async="async" integrity="sha512-hHV+IVEydQDZp/T01xkeWmo09r2KN8hkBhQFnMeNmCKBL0t9I0yv7XletCPf0Tgeqmb8UNUBT0G/zGvUqWjquA==" type="application/javascript" src="https://github.githubassets.com/assets/github-bootstrap-4f1a09d2.js"></script>
    
    
    
  <div class="js-stale-session-flash stale-session-flash flash flash-warn flash-banner" hidden
    >
    <svg class="octicon octicon-alert" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.893 1.5c-.183-.31-.52-.5-.887-.5s-.703.19-.886.5L.138 13.499a.98.98 0 0 0 0 1.001c.193.31.53.501.886.501h13.964c.367 0 .704-.19.877-.5a1.03 1.03 0 0 0 .01-1.002L8.893 1.5zm.133 11.497H6.987v-2.003h2.039v2.003zm0-3.004H6.987V5.987h2.039v4.006z"/></svg>
    <span class="signed-in-tab-flash">You signed in with another tab or window. <a href="">Reload</a> to refresh your session.</span>
    <span class="signed-out-tab-flash">You signed out in another tab or window. <a href="">Reload</a> to refresh your session.</span>
  </div>
  <template id="site-details-dialog">
  <details class="details-reset details-overlay details-overlay-dark lh-default text-gray-dark hx_rsm" open>
    <summary role="button" aria-label="Close dialog"></summary>
    <details-dialog class="Box Box--overlay d-flex flex-column anim-fade-in fast hx_rsm-dialog hx_rsm-modal">
      <button class="Box-btn-octicon m-0 btn-octicon position-absolute right-0 top-0" type="button" aria-label="Close dialog" data-close-dialog>
        <svg class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg>
      </button>
      <div class="octocat-spinner my-6 js-details-dialog-spinner"></div>
    </details-dialog>
  </details>
</template>

  <div class="Popover js-hovercard-content position-absolute" style="display: none; outline: none;" tabindex="0">
  <div class="Popover-message Popover-message--bottom-left Popover-message--large Box box-shadow-large" style="width:360px;">
  </div>
</div>

  <div aria-live="polite" class="js-global-screen-reader-notice sr-only"></div>

  </body>
</html>

