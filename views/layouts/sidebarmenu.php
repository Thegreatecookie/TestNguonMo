<?php
if(!isset($_SESSION)){
session_start();
}
?>
<div class="sidebar sidebar-style-2" data-background-color="dark2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<i class="fas fa-user"></i>
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">login</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="index.php">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
								
							</a>
							
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-list-alt"></i>
								<p>Danh Mục</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li>
										<a href="index.php?controller=theloaicontroller&action=index">
											<i class="fas fa-user"></i>
											<span class="sub-item">Thể Loại</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-table"></i>
								<p>Danh Sách</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="index.php?controller=usercontroller&action=index">
											<i class="fas fa-music"></i>
											<span class="sub-item">User</span>
										</a>
									</li>
									<li>
										<a href="index.php?controller=sanphamcontroller&action=index">
											<i class="fas fa-headphones"></i>
											<span class="sub-item">Sản Phẩm</span>
										</a>
									</li>
									<li>
										<a href="index.php?controller=nhaccontroller&action=index">
											<i class="fas fa-headphones"></i>
											<span class="sub-item">Nhạc</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>