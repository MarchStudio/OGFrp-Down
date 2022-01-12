<?php
namespace SakuraPanel;

use SakuraPanel;

$page_title = "软件下载";
$rs = Database::querySingleLine("users", Array("username" => $_SESSION['user']));

if(!$rs) {
	exit("<script>location='?page=login';</script>");
}
?>
<style type="text/css">
.fix-text p {
	margin-bottom: 4px;
}
.system-img {
	height: 32px;
}
.download tr td {
	vertical-align: middle;
}
</style>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo $page_title; ?>&nbsp;&nbsp;<small class="text-muted text-xs">下载各种版本的 Frp 客户端</small></h1></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="?">主页</a></li>
                    <li class="breadcrumb-item active"><?php echo $page_title; ?></li></ol>
            </div>
        </div>
	</div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">客户端下载   <a href="https://client.ogfrp.cn">https://client.ogfrp.cn<a></h3>
                        </div>
                    </div>
                    <div class="card-body p-0 table-responsive">
                        <table class="download table table-striped table-valign-middle">
							<thead>
								<tr>
									<th style="width: 32px;"></th>
									<th nowrap>系统类型</th>
									<th nowrap>系统架构</th>
									<th nowrap>软件版本</th>
									<th nowrap>查毒报告</th>
									<th nowrap>下载文件</th>
									<th nowrap>下载地址</th>
								</tr>
							</thead>
							<tbody>
								
								<tr>
									<td><img src="assets/download/windows.png" class="system-img"></td>
									<td nowrap>Windows</td>
									<td nowrap>64位</td>
									<td nowrap>精简版</td>
									<td nowrap><a href="https://s.threatbook.cn/report/file/ea5ed3a1b40c11f53b160299cb0feeb8f10830e88d0e5eeddcf0192fff82eae9/?env=win7_sp1_enx64_office2013" target="_blank"><button class="btn btn-sm btn-success">跳转微步</button></a></td>
									<td nowrap><a href="https://client.ogfrp.cn/OGFrp/OGFrp.Lite.exe" target="_blank"><button class="btn btn-sm btn-success">点击下载</button></a></td>
									<td nowrap><code>https://client.ogfrp.cn/OGFrp/OGFrp.Lite.exe</code></td>
									
								</tr>
								<tr>
									<td><img src="assets/download/windows.png" class="system-img"></td>
									<td nowrap>Windows</td>
									<td nowrap>64位</td>
									<td nowrap>图形界面版（安装版）</td>
									<td nowrap><a href="https://s.threatbook.cn/report/file/a9cbe68648e7c183a8c90a718bedcc8b4274aa4e9a60b0764f3e04d59f4bb9fe/?env=win7_sp1_enx64_office2013" target="_blank"><button class="btn btn-sm btn-success">跳转微步</button></a></td>
									<td nowrap><a href="https://client.ogfrp.cn/OGFrp/OGFrp.UI-Setup.exe" target="_blank"><button class="btn btn-sm btn-success">点击下载</button></a></td>
									<td nowrap><code>https://client.ogfrp.cn/OGFrp/OGFrp.UI-Setup.exe</code></td>
									
								</tr>
								<tr>
									<td><img src="assets/download/windows.png" class="system-img"></td>
									<td nowrap>Windows</td>
									<td nowrap>64位</td>
									<td nowrap>图形界面版（绿色版）</td>
									<td nowrap><a href="https://s.threatbook.cn/report/file/3908e68c269b984e3c3581d7acee2172813da8c1b32577bf831e6bed48a1b9b0/?env=win7_sp1_enx64_office2013" target="_blank"><button class="btn btn-sm btn-success">跳转微步</button></a></td>
									<td nowrap><a href="https://client.ogfrp.cn/OGFrp/OGFrp.UI.zip" target="_blank"><button class="btn btn-sm btn-success">点击下载</button></a></td>
									<td nowrap><code>https://client.ogfrp.cn/OGFrp/OGFrp.UI.zip</code></td>
									
								</tr>
								
<tr>
<td><img src="assets/download/linux.png" class="system-img"></td>
<td nowrap>Linux</td>
<td nowrap>32位</td>
<td nowrap>Headless</td>
<td nowrap><!--<a href="" target="_blank"><button class="btn btn-sm btn-success">-->还木有</button></a></td>
<td nowrap><a href="https://client.ogfrp.cn/OGFrp/OGFrp.Linux_i386.tar.xz" target="_blank"><button class="btn btn-sm btn-success">点击下载</button></a></td>
<td nowrap><code>https://client.ogfrp.cn/OGFrp/OGFrp.Linux_i386.tar.xz</code></td>
</tr>

							</tbody>
						</table>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>