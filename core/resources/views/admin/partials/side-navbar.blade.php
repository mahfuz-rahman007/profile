<aside class="main-sidebar elevation-4 main-sidebar elevation-4 sidebar-light-primary">
    <!-- Sidebar -->
    <div class="sidebar pt-0 mt-0">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel d-flex">
          <div class="image mx-auto">
            <img src=" {{ asset('assets/front/img/'.$adminProfile->image) }} " class="elevation-2" alt="User Image">
          </div>

        </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
              <a href="{{ route('admin.dashboard') }} " class="nav-link @if(request()->path() == 'admin/dashboard') active @endif">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    {{ __('Dashboard') }}
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview
              @if(request()->path() == 'admin/basicinfo') menu-open
              @elseif(request()->path() == 'admin/sectiontitle') menu-open
              @elseif(request()->path() == 'admin/seoinfo') menu-open
              @elseif(request()->path() == 'admin/scripts') menu-open
              @elseif(request()->path() == 'admin/pagevisibility') menu-open
              @elseif(request()->path() == 'admin/slinks') menu-open
              @elseif(request()->is('admin/slinks/edit/*')) menu-open
              @endif">
              <a href="#" class="nav-link
                @if(request()->path() == 'admin/basicinfo') active
                @elseif(request()->path() == 'admin/sectiontitle') active
                @elseif(request()->path() == 'admin/seoinfo') active
                @elseif(request()->path() == 'admin/scripts') active
                @elseif(request()->path() == 'admin/pagevisibility') active
                @elseif(request()->path() == 'admin/slinks') active
                @elseif(request()->is('admin/slinks/edit/*')) active
                @endif">
                <i class="nav-icon fas fas fa-cog"></i>
                <p>
                    {{ __('Settings') }}
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('admin.basicinfo') }}" class="nav-link @if(request()->path() == 'admin/basicinfo') active @endif">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('Basic Information') }}</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.slinks') }}" class="nav-link
                  @if(request()->path() == 'admin/slinks') active
                  @elseif(request()->is('admin/slinks/edit/*')) active
                    @endif">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('Social Links') }}</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.sectiontitle') }}" class="nav-link @if(request()->path() == 'admin/sectiontitle') active @endif">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('Section Title') }}</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.scripts') }}" class="nav-link @if(request()->path() == 'admin/scripts') active @endif">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('Scripts') }}</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.seoinfo') }}" class="nav-link @if(request()->path() == 'admin/seoinfo') active @endif">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('SEO Information') }}</p>
                  </a>
                </li>
                <li class="nav-item">
                <a href="{{ route('admin.pagevisibility') }}" class="nav-link  @if(request()->path() == 'admin/pagevisibility') active @endif">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('Pages Visibility') }}</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.home') }}" class="nav-link
                @if(request()->path() == 'admin/home') active
                @endif">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    {{ __('Home') }}
                  </p>
                </a>
            </li>
          <li class="nav-item has-treeview
            @if(request()->path() == 'admin/about') menu-open
            @elseif(request()->path() == 'admin/about/contact-info') menu-open
            @elseif(request()->path() == 'admin/about/funfact') menu-open
            @elseif(request()->is('admin/about/funfact/edit/*')) menu-open
            @elseif(request()->is('admin/about/funfact/add')) menu-open
            @endif">
            <a href="#" class="nav-link
              @if(request()->path() == 'admin/about') active
              @elseif(request()->path() == 'admin/about/contact-info') active
              @elseif(request()->path() == 'admin/about/funfact') active
              @elseif(request()->path() == 'admin/about/funfact/add') active
              @elseif(request()->is('admin/about/funfact/edit/*')) active
              @endif">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                {{ __('About') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.about') }}" class="nav-link
                @if(request()->path() == 'admin/about') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('About Me') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.contactinfo') }}" class="nav-link
                @if(request()->path() == 'admin/about/contact-info') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Contact Info') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.funfact') }}" class="nav-link
                  @if(request()->path() == 'admin/about/funfact') active
                  @elseif(request()->path() == 'admin/about/funfact/add') active
                  @elseif(request()->is('admin/about/funfact/edit/*')) active
                  @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Fun Facts') }}</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.service') }}" class="nav-link
            @if(request()->path() == 'admin/service') active
            @elseif(request()->path() == 'admin/service/add') active
            @elseif(request()->is('admin/service/edit/*')) active
            @endif">
              <i class="nav-icon fas fa-magic"></i>
              <p>
                {{ __('Services') }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" " class="nav-link
            @if(request()->path() == 'admin/message') active
            @elseif(request()->path() == 'admin/message/view') active
            @endif">
              <i class="nav-icon fab fa-facebook-messenger"></i>
              <p>
                {{ __('Message') }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.education') }}" class="nav-link
            @if(request()->path() == 'admin/education') active
            @elseif(request()->path() == 'admin/education/add') active
            @elseif(request()->is('admin/education/edit/*')) active
            @endif">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                {{ __('Education') }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.experience') }} " class="nav-link
            @if(request()->path() == 'admin/experience') active
            @elseif(request()->path() == 'admin/experience/add') active
            @elseif(request()->is('admin/experience/edit/*')) active
            @endif">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                {{ __('Experiences') }}
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview
            @if(request()->path() == 'admin/skill') menu-open
            @elseif(request()->path() == 'admin/skill/skill-category') menu-open
            @elseif(request()->path() == 'admin/skill/skill-category/add') menu-open
            @elseif(request()->path() == 'admin/skill/add') menu-open
            @elseif(request()->is('admin/skill/skill-category/edit/*')) menu-open
            @elseif(request()->is('admin/skill/edit/*')) menu-open
            @endif">
            <a href="#" class="nav-link
              @if(request()->path() == 'admin/skill') active
              @elseif(request()->path() == 'admin/skill/skill-category') active
              @elseif(request()->path() == 'admin/skill/skill-category/add') active
              @elseif(request()->path() == 'admin/skill/add') active
              @elseif(request()->is('admin/skill/skill-category/edit/*')) active
              @elseif(request()->is('admin/skill/edit/*')) active
              @endif">
              <i class="nav-icon fas fa-lightbulb"></i>
              <p>
                {{ __('Skills') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.scategory') }} " class="nav-link
                @if(request()->path() == 'admin/skill/skill-category') active
                @elseif(request()->path() == 'admin/skill/skill-category/add') active
                @elseif(request()->is('admin/skill/skill-category/edit/*')) active
                @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Skills Categories') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.skill') }}" class="nav-link
                @if(request()->path() == 'admin/skill') active
                @elseif(request()->path() == 'admin/skill/add') active
                @elseif(request()->is('admin/skill/edit/*')) active
                @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ __('Skills') }}</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.portfolio') }}" class="nav-link
            @if(request()->path() == 'admin/portfolio') active
            @elseif(request()->path() == 'admin/portfolio/add') active
            @elseif(request()->is('admin/portfolio/edit/*')) active
            @endif">
              <i class="nav-icon fas fa-photo-video"></i>
              <p>
                {{ __('Portfolio') }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.pricing') }}" class="nav-link
             @if(request()->path() == 'admin/pricing-plan') active
             @elseif(request()->path() == 'admin/pricing-plan/add') active
             @elseif(request()->is('admin/pricing-plan/edit/*')) active
             @endif">
              <i class="nav-icon fas fa-hand-holding-usd"></i>
              <p>
                {{ __('Pricing Plans') }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.testimonial') }}" class="nav-link
            @if(request()->path() == 'admin/testimonial') active
            @elseif(request()->path() == 'admin/testimonial/add') active
            @elseif(request()->is('admin/testimonial/edit/*')) active
            @endif">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                {{ __('Testimonial') }}
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview
              @if(request()->path() == 'admin/blog') menu-open
              @elseif(request()->path() == 'admin/blog/blog-category') menu-open
              @elseif(request()->path() == 'admin/blog/blog-category/add') menu-open
              @elseif(request()->path() == 'admin/blog/add') menu-open
              @elseif(request()->is('admin/blog/blog-category/edit/*')) menu-open
              @elseif(request()->is('admin/blog/edit/*')) menu-open
              @endif">
              <a href="#" class="nav-link
                @if(request()->path() == 'admin/blog') active
                @elseif(request()->path() == 'admin/blog/blog-category') active
                @elseif(request()->path() == 'admin/blog/blog-category/add') active
                @elseif(request()->path() == 'admin/blog/add') active
                @elseif(request()->is('admin/blog/blog-category/edit/*')) active
                @elseif(request()->is('admin/blog/edit/*')) active
                @endif">
                <i class="nav-icon fab fa-blogger-b"></i>
                <p>
                  {{ __('Blog') }}
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('admin.bcategory') }}" class="nav-link
                  @if(request()->path() == 'admin/blog/blog-category') active
                  @elseif(request()->path() == 'admin/blog/blog-category/add') active
                  @elseif(request()->is('admin/blog/blog-category/edit/*')) active
                  @endif">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('Blog Categories') }}</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.blog') }} " class="nav-link
                  @if(request()->path() == 'admin/blog') active
                  @elseif(request()->path() == 'admin/blog/add') active
                  @elseif(request()->is('admin/blog/edit/*')) active
                  @endif">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('Blog') }}</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.client') }}" class="nav-link
            @if(request()->path() == 'admin/client') active
            @elseif(request()->path() == 'admin/client/add') active
            @elseif(request()->is('admin/client/edit/*')) active
            @endif">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                {{ __('Client') }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.footer') }}" class="nav-link @if(request()->path() == 'admin/footer') active @endif">
              <i class="nav-icon fas fa-feather-alt"></i>
              <p>
                {{ __('Footer') }}
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
