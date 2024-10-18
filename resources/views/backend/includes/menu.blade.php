<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
	<div class="sidebar-header">
		<div>
			<img src="{{ asset('backend/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
		</div>
		<div>
			<h4 class="logo-text">Admin Panel</h4>
		</div>
		<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
		</div>
	</div>
	<!--navigation-->
	<ul class="metismenu" id="menu">
		<li>
			<a href="{{ route('admin.dashboard') }}" class="">
				<div class="parent-icon"><i class='bx bx-home-circle'></i>
				</div>
				<div class="menu-title">Dashboard</div>
			</a>
		</li>

		<li class="menu-label">Product Management</li>

		<!-- Brand Menu Items -->
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">Brand</div>
			</a>
			<ul>
				<li> <a href="{{ route('brand.create') }}"><i class="bx bx-right-arrow-alt"></i>Add New Brand</a>
				</li>
				<li> <a href="{{ route('brand.manage') }}"><i class="bx bx-right-arrow-alt"></i>Manage Brands</a>
				</li>
			</ul>
		</li>
		
		<!-- Category Menu Items -->
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">Category</div>
			</a>
			<ul>
				<li> <a href="{{ route('category.create') }}"><i class="bx bx-right-arrow-alt"></i>Add Parent Category</a>
				</li>
				<li> <a href="{{ route('category.manage') }}"><i class="bx bx-right-arrow-alt"></i>Manage Parent Categories</a>
				</li>
				<li> <a href="{{ route('subCategory.create') }}"><i class="bx bx-right-arrow-alt"></i>Add Child Category</a>
				</li>
				<li> <a href="{{ route('subCategory.manage') }}"><i class="bx bx-right-arrow-alt"></i>Manage Child Categories</a>
				</li>
			</ul>
		</li>

		<!-- Product Menu Items -->
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">Product</div>
			</a>
			<ul>
				<li> <a href="{{ route('product.create') }}"><i class="bx bx-right-arrow-alt"></i>Add New Product</a>
				</li>
				<li> <a href="{{ route('product.manage') }}"><i class="bx bx-right-arrow-alt"></i>Manage Products</a>
				</li>
			</ul>
		</li>

		<li class="menu-label">Order Management</li>

		<!-- Order Menu Items -->
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">Order</div>
			</a>
			<ul>
				<li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>Manage Orders</a>
				</li>
			</ul>
		</li>

		<!-- Wishlist Menu Items -->
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">Wishlist</div>
			</a>
			<ul>
				<li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>Manage Wishlist</a>
				</li>
			</ul>
		</li>

		<li class="menu-label">Marketing Tools</li>

		<!-- Coupon Code Menu Items -->
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">Coupon Code</div>
			</a>
			<ul>
				<li> <a href="app-emailbox.html"><i class="bx bx-right-arrow-alt"></i>Add New Coupon</a>
				</li>
				<li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>Manage Coupons</a>
				</li>
			</ul>
		</li>

		<!-- Advertisement Menu Items -->
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">Advertisement</div>
			</a>
			<ul>
				<li> <a href="app-emailbox.html"><i class="bx bx-right-arrow-alt"></i>Add New Advertisement</a>
				</li>
				<li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>Manage Advertisements</a>
				</li>
			</ul>
		</li>

		<!-- Customer List Menu Items -->
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">Customers</div>
			</a>
			<ul>
				<li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>All Customers</a>
				</li>
			</ul>
		</li>

		<li class="menu-label">Shipping Management</li>

		<!-- Country Menu Items -->
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">Country</div>
			</a>
			<ul>
				<li> <a href="{{ route('country.create') }}"><i class="bx bx-right-arrow-alt"></i>Add New Country</a>
				</li>
				<li> <a href="{{ route('country.manage') }}"><i class="bx bx-right-arrow-alt"></i>Manage all Country</a>
				</li>
			</ul>
		</li>

		<!-- State Menu Items -->
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">State</div>
			</a>
			<ul>
				<li> <a href="{{ route('state.create') }}"><i class="bx bx-right-arrow-alt"></i>Add New State</a>
				</li>
				<li> <a href="{{ route('state.manage') }}"><i class="bx bx-right-arrow-alt"></i>Manage States</a>
				</li>
			</ul>
		</li>

		<!-- District Menu Items -->
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">District</div>
			</a>
			<ul>
				<li> <a href="{{ route('district.create') }}"><i class="bx bx-right-arrow-alt"></i>Add New District</a>
				</li>
				<li> <a href="{{ route('district.manage') }}"><i class="bx bx-right-arrow-alt"></i>Manage Districts</a>
				</li>
			</ul>
		</li>

		<li class="menu-label">Platform Settings</li>

		<!-- Platform Settings Menu Items -->
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">Settings</div>
			</a>
			<ul>
				<li> 
					<a href="app-emailbox.html">
						<i class="bx bx-right-arrow-alt"></i>General Settings
					</a>
				</li>
				<li> 
					<a href="app-chat-box.html">
						<i class="bx bx-right-arrow-alt"></i>Currency Settings
					</a>
				</li>
				<li> 
					<a href="app-chat-box.html">
						<i class="bx bx-right-arrow-alt"></i>Social Media
					</a>
				</li>
			</ul>
		</li>

		<li class="menu-label">Reports</li>

		<!-- Report Menu Items -->
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">Report</div>
			</a>
			<ul>
				<li> 
					<a href="app-emailbox.html">
						<i class="bx bx-right-arrow-alt"></i>Selling Reports
					</a>
				</li>
				<li> 
					<a href="app-chat-box.html">
						<i class="bx bx-right-arrow-alt"></i>Product Reports
					</a>
				</li>
			</ul>
		</li>
	</ul>
	<!--end navigation-->
</div>
<!--end sidebar wrapper -->