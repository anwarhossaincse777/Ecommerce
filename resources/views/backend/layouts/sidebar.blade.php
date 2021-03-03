


//menu active thakar jonno


@php

$prefix=\Illuminate\Support\Facades\Request::route()->getPrefix();

$route=\Illuminate\Support\Facades\Route::current()->getName();

@endphp








<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->


{{--        @if(\Illuminate\Support\Facades\Auth::user()->usertype=='Admin')--}}
        <li class="nav-item has-treeview {{($prefix=='/user')?'menu-open':''}}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                   Manage User
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
{{--                    <a href="{{route('user.view')}}" class="nav-link {{($route=='user.view')?'active':''}}">--}}
                        <i class="far fa-circle nav-icon"></i>
                        <p>View User</p>
                    </a>
                </li>

            </ul>
        </li>
{{--        @endif--}}

        <li class="nav-item has-treeview {{($prefix=='/profiles')?'menu-open':''}}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                   Manage Profile
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
{{--                    <a href="{{route('profiles.view')}}" class="nav-link {{($route=='profiles.view')?'active':''}}">--}}
                        <i class="far fa-circle nav-icon"></i>
                        <p>Your Profile</p>
                    </a>
                </li>

                <li class="nav-item">
{{--                    <a href="{{route('profiles.password.view')}}" class="nav-link" {{($route=='profiles.password.view')?'active':''}}>--}}
                        <i class="far fa-circle nav-icon"></i>
                        <p>Change Password</p>
                    </a>
                </li>

            </ul>
        </li>





       <li class="nav-item has-treeview {{($prefix=='/page')?'menu-open':''}}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                   Manage Page
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                   <a href="{{url('admin/page')}}" class="nav-link {{($route=='page')?'active':''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Pages</p>
                    </a>
                </li>

            </ul>

        </li>{{--        <li class="nav-item has-treeview {{($prefix=='/logos')?'menu-open':''}}">--}}
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                   Manage Logo
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
{{--                    <a href="{{route('logos.view')}}" class="nav-link {{($route=='logos.view')?'active':''}}">--}}
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Logo</p>
                    </a>
                </li>

            </ul>
        </li>



{{--        <li class="nav-item has-treeview {{($prefix=='/slider')?'menu-open':''}}">--}}
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                   Manage Sliders
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
{{--                    <a href="{{route('slider.view')}}" class="nav-link {{($route=='slider.view')?'active':''}}">--}}
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Sliders</p>
                    </a>
                </li>

            </ul>
        </li>

{{--        <li class="nav-item has-treeview {{($prefix=='/contact')?'menu-open':''}}">--}}
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Contact
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
{{--                    <a href="{{route('contact.view')}}" class="nav-link {{($route=='contact.view')?'active':''}}">--}}
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Contact</p>
                    </a>
                </li>

            </ul>

            <ul class="nav nav-treeview">
                <li class="nav-item">
{{--                    <a href="{{route('contact.communicate')}}" class="nav-link {{($route=='contact.communicate')?'active':''}}">--}}
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Communicate</p>
                    </a>
                </li>

            </ul>

        </li>



{{-- <li class="nav-item has-treeview {{($prefix=='/contact')?'menu-open':''}}">--}}
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage About
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
{{--                    <a href="{{route('abouts.view')}}" class="nav-link {{($route=='abouts.view')?'active':''}}">--}}
                        <i class="far fa-circle nav-icon"></i>
                        <p>View About</p>
                    </a>
                </li>

            </ul>
        </li>


{{--  <li class="nav-item has-treeview {{($prefix=='/suppliers')?'menu-open':''}}">--}}
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                   Manage Suppliers
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
{{--                    <a href="{{route('suppliers.view')}}" class="nav-link {{($route=='suppliers.view')?'active':''}}">--}}
                        <i class="far fa-circle nav-icon"></i>
                        <p>View suppliers</p>
                    </a>
                </li>

            </ul>
        </li>



{{--        <li class="nav-item has-treeview {{($prefix=='/customers')?'menu-open':''}}">--}}
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                   Manage Customers
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
{{--                    <a href="{{route('customers.view')}}" class="nav-link {{($route=='customers.view')?'active':''}}">--}}
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Customers</p>
                    </a>
                </li>

            </ul>
        </li>

{{--        <li class="nav-item has-treeview {{($prefix=='/units')?'menu-open':''}}">--}}
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                   Manage Units
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
{{--                    <a href="{{route('units.view')}}" class="nav-link {{($route=='units.view')?'active':''}}">--}}
                        <i class="far fa-circle nav-icon"></i>
                        <p>View units</p>
                    </a>
                </li>

            </ul>
        </li>




       <li class="nav-item has-treeview {{($prefix=='/category')?'menu-open':''}}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                   Manage Category
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                 <a href="{{url('admin/category')}}" class="nav-link {{($route=='category')?'active':''}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Categories</p>
                    </a>
                </li>

            </ul>
        </li>







{{--        <li class="nav-item has-treeview {{($prefix=='/brand')?'menu-open':''}}">--}}
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                   Manage Brands
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
{{--                    <a href="{{route('brand.view')}}" class="nav-link {{($route=='brand.view')?'active':''}}">--}}
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Brands</p>
                    </a>
                </li>

            </ul>
        </li>


{{--        <li class="nav-item has-treeview {{($prefix=='/brand')?'menu-open':''}}">--}}
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                   Manage Colours
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
{{--                    <a href="{{route('color.view')}}" class="nav-link {{($route=='color.view')?'active':''}}">--}}
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Colours</p>
                    </a>
                </li>

            </ul>
        </li>


{{--        <li class="nav-item has-treeview {{($prefix=='/size')?'menu-open':''}}">--}}
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                   Manage Size
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
{{--                    <a href="{{route('size.view')}}" class="nav-link {{($route=='size.view')?'active':''}}">--}}
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Size</p>
                    </a>
                </li>

            </ul>
        </li>


{{--        <li class="nav-item has-treeview {{($prefix=='/product')?'menu-open':''}}">--}}
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                   Manage Products
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
{{--                    <a href="{{route('product.view')}}" class="nav-link {{($route=='product.view')?'active':''}}">--}}
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Product</p>
                    </a>
                </li>

            </ul>
        </li>


{{--        <li class="nav-item has-treeview {{($prefix=='/purchase')?'menu-open':''}}">--}}
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage purchase
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
{{--                    <a href="{{route('purchase.view')}}" class="nav-link {{($route=='purchase.view')?'active':''}}">--}}
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Purchase</p>
                    </a>
                </li>

            </ul>

            <ul class="nav nav-treeview">
                <li class="nav-item">
{{--                    <a href="{{route('purchase.pending.list')}}" class="nav-link {{($route=='purchase.pending.list')?'active':''}}">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
                        <p>Approval Purchase</p>
                    </a>
                </li>

            </ul>
        </li>


        //Invoice start here


{{--        <li class="nav-item has-treeview {{($prefix=='/invoice')?'menu-open':''}}">--}}
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Invoice
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
{{--                    <a href="{{route('invoice.view')}}" class="nav-link {{($route=='invoice.view')?'active':''}}">--}}
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Invoice</p>
                    </a>
                </li>

            </ul>

            <ul class="nav nav-treeview">
                <li class="nav-item">
{{--                    <a href="{{route('invoice.pending.list')}}" class="nav-link {{($route=='invoice.pending.list')?'active':''}}">--}}
                        <i class="far fa-circle nav-icon"></i>
                        <p>Approval Invoice</p>
                    </a>
                </li>

                <li class="nav-item">
{{--                    <a href="{{route('invoice.print')}}" class="nav-link {{($route=='invoice.print')?'active':''}}">--}}
                        <i class="far fa-circle nav-icon"></i>
                        <p>Print Invoice</p>
                    </a>
                </li>

                <li class="nav-item">
{{--                    <a href="{{route('invoice.daily.report')}}" class="nav-link {{($route=='invoice.daily.report')?'active':''}}">--}}
                        <i class="far fa-circle nav-icon"></i>
                        <p>Daily Invoice Report</p>
                    </a>
                </li>

            </ul>
        </li>
    </ul>
</nav>
