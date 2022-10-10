<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
      <ul class="nav nav-pills nav-sidebar flex-column pt-3" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('admin.main.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Главная
                    </p>
                </a>
                </li> 
            <li class="nav-item">
                <a href="{{route('admin.user.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Пользователи
                    </p>
                </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.post.index')}}" class="nav-link">
                  <i class="nav-icon far fa-clipboard"></i>
                  <p>
                      Посты
                  </p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.category.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-th-list"></i>
                    <p>
                        Категории
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.tag.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-tags"></i>
                    <p>
                        Тэги
                    </p>
                </a>
            </li>
            <li class="nav-item ">
              <a href="{{route('main.index')}}" class="nav-link">
                <i class="nav-icon far fa-house-return"></i>
                <p>
                    Вернутся в Блог
                </p>
              </a>
            </li>
        </ul>
    </div>
</aside>
