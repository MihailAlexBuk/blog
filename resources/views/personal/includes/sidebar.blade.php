<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
      <ul class="nav nav-pills nav-sidebar flex-column pt-3" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('personal.main.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Главная
                    </p>
                </a>
                </li> 
            <li class="nav-item">
                <a href="{{route('personal.liked.index')}}" class="nav-link">
                    <i class="nav-icon far fa-heart"></i>
                    <p>
                        Понравившееся посты
                    </p>
                </a>
            </li>
            <li class="nav-item">
              <a href="{{route('personal.comment.index')}}" class="nav-link">
                  <i class="nav-icon far fa-comment"></i>
                  <p>
                      Комментарии
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
