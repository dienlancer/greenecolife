<?php
Route::group(["prefix"=>"adminsystem","middleware"=>"TestLogin"],function(){	
	Route::group(["prefix"=>"category-product"],function(){		
		Route::match(["get","post"],"list",["as"=>"adminsystem.category-product.getList","uses"=>"adminsystem\CategoryProductController@getList"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.category-product.getForm","uses"=>"adminsystem\CategoryProductController@getForm"]);
		Route::post("save",["as"=>"adminsystem.category-product.save","uses"=>"adminsystem\CategoryProductController@save"]);
		Route::get("delete-item/{id}",["as"=>"adminsystem.category-product.deleteItem","uses"=>"adminsystem\CategoryProductController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.category-product.sortOrder","uses"=>"adminsystem\CategoryProductController@sortOrder"]);
		Route::post("update-status/{status}",["as"=>"adminsystem.category-product.updateStatus","uses"=>"adminsystem\CategoryProductController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.category-product.changeStatus","uses"=>"adminsystem\CategoryProductController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.category-product.trash","uses"=>"adminsystem\CategoryProductController@trash"]);
		Route::post("upload-file",["as"=>"adminsystem.category-product.uploadFile","uses"=>"adminsystem\CategoryProductController@uploadFile"]);
		Route::post("create-alias",["as"=>"adminsystem.category-product.createAlias","uses"=>"adminsystem\CategoryProductController@createAlias"]);
	});	
	Route::group(["prefix"=>"banner"],function(){		
		Route::match(["get","post"],"list/{category_id}",["as"=>"adminsystem.banner.getList","uses"=>"adminsystem\BannerController@getList"]);	
		Route::post("load-data",["as"=>"adminsystem.banner.loadData","uses"=>"adminsystem\BannerController@loadData"]);		
		Route::get("form/{task}/{category_id?}/{id?}",["as"=>"adminsystem.banner.getForm","uses"=>"adminsystem\BannerController@getForm"]);
		Route::post("save",["as"=>"adminsystem.banner.save","uses"=>"adminsystem\BannerController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.banner.deleteItem","uses"=>"adminsystem\BannerController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.banner.sortOrder","uses"=>"adminsystem\BannerController@sortOrder"]);
		Route::post("update-status",["as"=>"adminsystem.banner.updateStatus","uses"=>"adminsystem\BannerController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.banner.changeStatus","uses"=>"adminsystem\BannerController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.banner.trash","uses"=>"adminsystem\BannerController@trash"]);		
		Route::post("upload-file",["as"=>"adminsystem.banner.uploadFile","uses"=>"adminsystem\BannerController@uploadFile"]);
	});	
	Route::group(["prefix"=>"payment-method"],function(){		
		Route::get("list",["as"=>"adminsystem.payment-method.getList","uses"=>"adminsystem\PaymentMethodController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.payment-method.loadData","uses"=>"adminsystem\PaymentMethodController@loadData"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.payment-method.getForm","uses"=>"adminsystem\PaymentMethodController@getForm"]);
		Route::post("save",["as"=>"adminsystem.payment-method.save","uses"=>"adminsystem\PaymentMethodController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.payment-method.deleteItem","uses"=>"adminsystem\PaymentMethodController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.payment-method.sortOrder","uses"=>"adminsystem\PaymentMethodController@sortOrder"]);
		Route::post("update-status",["as"=>"adminsystem.payment-method.updateStatus","uses"=>"adminsystem\PaymentMethodController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.payment-method.changeStatus","uses"=>"adminsystem\PaymentMethodController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.payment-method.trash","uses"=>"adminsystem\PaymentMethodController@trash"]);		
		Route::post("create-alias",["as"=>"adminsystem.payment-method.createAlias","uses"=>"adminsystem\PaymentMethodController@createAlias"]);
	});
	Route::group(["prefix"=>"setting-system"],function(){		
		Route::get("list",["as"=>"adminsystem.setting-system.getList","uses"=>"adminsystem\SettingSystemController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.setting-system.loadData","uses"=>"adminsystem\SettingSystemController@loadData"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.setting-system.getForm","uses"=>"adminsystem\SettingSystemController@getForm"]);
		Route::post("save",["as"=>"adminsystem.setting-system.save","uses"=>"adminsystem\SettingSystemController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.setting-system.deleteItem","uses"=>"adminsystem\SettingSystemController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.setting-system.sortOrder","uses"=>"adminsystem\SettingSystemController@sortOrder"]);
		Route::post("update-status",["as"=>"adminsystem.setting-system.updateStatus","uses"=>"adminsystem\SettingSystemController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.setting-system.changeStatus","uses"=>"adminsystem\SettingSystemController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.setting-system.trash","uses"=>"adminsystem\SettingSystemController@trash"]);	
		Route::post("upload-file",["as"=>"adminsystem.setting-system.uploadFile","uses"=>"adminsystem\SettingSystemController@uploadFile"]);	
		Route::post("create-alias",["as"=>"adminsystem.setting-system.createAlias","uses"=>"adminsystem\SettingSystemController@createAlias"]);
	});
	Route::group(["prefix"=>"product"],function(){		
		Route::get("list",["as"=>"adminsystem.product.getList","uses"=>"adminsystem\ProductController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.product.loadData","uses"=>"adminsystem\ProductController@loadData"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.product.getForm","uses"=>"adminsystem\ProductController@getForm"]);
		Route::post("save",["as"=>"adminsystem.product.save","uses"=>"adminsystem\ProductController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.product.deleteItem","uses"=>"adminsystem\ProductController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.product.sortOrder","uses"=>"adminsystem\ProductController@sortOrder"]);
		Route::post("update-status",["as"=>"adminsystem.product.updateStatus","uses"=>"adminsystem\ProductController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.product.changeStatus","uses"=>"adminsystem\ProductController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.product.trash","uses"=>"adminsystem\ProductController@trash"]);
		Route::post("upload-file",["as"=>"adminsystem.product.uploadFile","uses"=>"adminsystem\ProductController@uploadFile"]);
		Route::post("create-alias",["as"=>"adminsystem.product.createAlias","uses"=>"adminsystem\ProductController@createAlias"]);
	});		
	Route::group(["prefix"=>"privilege"],function(){		
		Route::get("list",["as"=>"adminsystem.privilege.getList","uses"=>"adminsystem\PrivilegeController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.privilege.loadData","uses"=>"adminsystem\PrivilegeController@loadData"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.privilege.getForm","uses"=>"adminsystem\PrivilegeController@getForm"]);
		Route::post("save",["as"=>"adminsystem.privilege.save","uses"=>"adminsystem\PrivilegeController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.privilege.deleteItem","uses"=>"adminsystem\PrivilegeController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.privilege.sortOrder","uses"=>"adminsystem\PrivilegeController@sortOrder"]);		
		Route::post("trash",["as"=>"adminsystem.privilege.trash","uses"=>"adminsystem\PrivilegeController@trash"]);		
	});	
	Route::group(["prefix"=>"category-video"],function(){		
		Route::get("list",["as"=>"adminsystem.category-video.getList","uses"=>"adminsystem\CategoryVideoController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.category-video.loadData","uses"=>"adminsystem\CategoryVideoController@loadData"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.category-video.getForm","uses"=>"adminsystem\CategoryVideoController@getForm"]);
		Route::post("save",["as"=>"adminsystem.category-video.save","uses"=>"adminsystem\CategoryVideoController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.category-video.deleteItem","uses"=>"adminsystem\CategoryVideoController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.category-video.sortOrder","uses"=>"adminsystem\CategoryVideoController@sortOrder"]);
		Route::post("update-status",["as"=>"adminsystem.category-video.updateStatus","uses"=>"adminsystem\CategoryVideoController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.category-video.changeStatus","uses"=>"adminsystem\CategoryVideoController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.category-video.trash","uses"=>"adminsystem\CategoryVideoController@trash"]);
		Route::post("upload-file",["as"=>"adminsystem.category-video.uploadFile","uses"=>"adminsystem\CategoryVideoController@uploadFile"]);
		Route::post("create-alias",["as"=>"adminsystem.category-video.createAlias","uses"=>"adminsystem\CategoryVideoController@createAlias"]);
	});	
	Route::group(["prefix"=>"customer"],function(){		
		Route::get("list",["as"=>"adminsystem.customer.getList","uses"=>"adminsystem\CustomerController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.customer.loadData","uses"=>"adminsystem\CustomerController@loadData"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.customer.getForm","uses"=>"adminsystem\CustomerController@getForm"]);
		Route::post("save",["as"=>"adminsystem.customer.save","uses"=>"adminsystem\CustomerController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.customer.deleteItem","uses"=>"adminsystem\CustomerController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.customer.sortOrder","uses"=>"adminsystem\CustomerController@sortOrder"]);
		Route::post("update-status",["as"=>"adminsystem.customer.updateStatus","uses"=>"adminsystem\CustomerController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.customer.changeStatus","uses"=>"adminsystem\CustomerController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.customer.trash","uses"=>"adminsystem\CustomerController@trash"]);		
	});
	Route::group(["prefix"=>"invoice"],function(){		
		Route::get("list",["as"=>"adminsystem.invoice.getList","uses"=>"adminsystem\InvoiceController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.invoice.loadData","uses"=>"adminsystem\InvoiceController@loadData"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.invoice.getForm","uses"=>"adminsystem\InvoiceController@getForm"]);
		Route::post("save",["as"=>"adminsystem.invoice.save","uses"=>"adminsystem\InvoiceController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.invoice.deleteItem","uses"=>"adminsystem\InvoiceController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.invoice.sortOrder","uses"=>"adminsystem\InvoiceController@sortOrder"]);
		Route::post("update-status",["as"=>"adminsystem.invoice.updateStatus","uses"=>"adminsystem\InvoiceController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.invoice.changeStatus","uses"=>"adminsystem\InvoiceController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.invoice.trash","uses"=>"adminsystem\InvoiceController@trash"]);
	});
	Route::group(["prefix"=>"user"],function(){		
		Route::get("list",["as"=>"adminsystem.user.getList","uses"=>"adminsystem\UserController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.user.loadData","uses"=>"adminsystem\UserController@loadData"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.user.getForm","uses"=>"adminsystem\UserController@getForm"]);
		Route::post("save",["as"=>"adminsystem.user.save","uses"=>"adminsystem\UserController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.user.deleteItem","uses"=>"adminsystem\UserController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.user.sortOrder","uses"=>"adminsystem\UserController@sortOrder"]);
		Route::post("update-status",["as"=>"adminsystem.user.updateStatus","uses"=>"adminsystem\UserController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.user.changeStatus","uses"=>"adminsystem\UserController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.user.trash","uses"=>"adminsystem\UserController@trash"]);		
		Route::post("upload-file",["as"=>"adminsystem.user.uploadFile","uses"=>"adminsystem\UserController@uploadFile"]);
	});
	Route::group(["prefix"=>"category-article"],function(){		
		Route::match(["get","post"],"list",["as"=>"adminsystem.category-article.getList","uses"=>"adminsystem\CategoryArticleController@getList"]);	
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.category-article.getForm","uses"=>"adminsystem\CategoryArticleController@getForm"]);
		Route::post("save",["as"=>"adminsystem.category-article.save","uses"=>"adminsystem\CategoryArticleController@save"]);
		Route::get("delete-item/{id}",["as"=>"adminsystem.category-article.deleteItem","uses"=>"adminsystem\CategoryArticleController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.category-article.sortOrder","uses"=>"adminsystem\CategoryArticleController@sortOrder"]);
		Route::post("update-status/{status}",["as"=>"adminsystem.category-article.updateStatus","uses"=>"adminsystem\CategoryArticleController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.category-article.changeStatus","uses"=>"adminsystem\CategoryArticleController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.category-article.trash","uses"=>"adminsystem\CategoryArticleController@trash"]);
		Route::post("upload-file",["as"=>"adminsystem.category-article.uploadFile","uses"=>"adminsystem\CategoryArticleController@uploadFile"]);
		Route::post("create-alias",["as"=>"adminsystem.category-article.createAlias","uses"=>"adminsystem\CategoryArticleController@createAlias"]);
	});	
	Route::group(["prefix"=>"category-banner"],function(){		
		Route::get("list",["as"=>"adminsystem.category-banner.getList","uses"=>"adminsystem\CategoryBannerController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.category-banner.loadData","uses"=>"adminsystem\CategoryBannerController@loadData"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.category-banner.getForm","uses"=>"adminsystem\CategoryBannerController@getForm"]);
		Route::post("save",["as"=>"adminsystem.category-banner.save","uses"=>"adminsystem\CategoryBannerController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.category-banner.deleteItem","uses"=>"adminsystem\CategoryBannerController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.category-banner.sortOrder","uses"=>"adminsystem\CategoryBannerController@sortOrder"]);
		Route::post("update-status",["as"=>"adminsystem.category-banner.updateStatus","uses"=>"adminsystem\CategoryBannerController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.category-banner.changeStatus","uses"=>"adminsystem\CategoryBannerController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.category-banner.trash","uses"=>"adminsystem\CategoryBannerController@trash"]);		
	});		

	Route::group(["prefix"=>"video"],function(){		
		Route::get("list",["as"=>"adminsystem.video.getList","uses"=>"adminsystem\VideoController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.video.loadData","uses"=>"adminsystem\VideoController@loadData"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.video.getForm","uses"=>"adminsystem\VideoController@getForm"]);
		Route::post("save",["as"=>"adminsystem.video.save","uses"=>"adminsystem\VideoController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.video.deleteItem","uses"=>"adminsystem\VideoController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.video.sortOrder","uses"=>"adminsystem\VideoController@sortOrder"]);
		Route::post("update-status",["as"=>"adminsystem.video.updateStatus","uses"=>"adminsystem\VideoController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.video.changeStatus","uses"=>"adminsystem\VideoController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.video.trash","uses"=>"adminsystem\VideoController@trash"]);
		Route::post("upload-file",["as"=>"adminsystem.video.uploadFile","uses"=>"adminsystem\VideoController@uploadFile"]);		
	});	
	Route::group(["prefix"=>"article"],function(){		
		Route::get("list",["as"=>"adminsystem.article.getList","uses"=>"adminsystem\ArticleController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.article.loadData","uses"=>"adminsystem\ArticleController@loadData"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.article.getForm","uses"=>"adminsystem\ArticleController@getForm"]);
		Route::post("save",["as"=>"adminsystem.article.save","uses"=>"adminsystem\ArticleController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.article.deleteItem","uses"=>"adminsystem\ArticleController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.article.sortOrder","uses"=>"adminsystem\ArticleController@sortOrder"]);
		Route::post("update-status",["as"=>"adminsystem.article.updateStatus","uses"=>"adminsystem\ArticleController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.article.changeStatus","uses"=>"adminsystem\ArticleController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.article.trash","uses"=>"adminsystem\ArticleController@trash"]);
		Route::post("upload-file",["as"=>"adminsystem.article.uploadFile","uses"=>"adminsystem\ArticleController@uploadFile"]);
		Route::post("create-alias",["as"=>"adminsystem.article.createAlias","uses"=>"adminsystem\ArticleController@createAlias"]);
	});	
	Route::group(["prefix"=>"photo"],function(){		
		Route::get("list",["as"=>"adminsystem.photo.getList","uses"=>"adminsystem\PhotoController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.photo.loadData","uses"=>"adminsystem\PhotoController@loadData"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.photo.getForm","uses"=>"adminsystem\PhotoController@getForm"]);
		Route::post("save",["as"=>"adminsystem.photo.save","uses"=>"adminsystem\PhotoController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.photo.deleteItem","uses"=>"adminsystem\PhotoController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.photo.sortOrder","uses"=>"adminsystem\PhotoController@sortOrder"]);
		Route::post("update-status",["as"=>"adminsystem.photo.updateStatus","uses"=>"adminsystem\PhotoController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.photo.changeStatus","uses"=>"adminsystem\PhotoController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.photo.trash","uses"=>"adminsystem\PhotoController@trash"]);		
	});	
	Route::group(["prefix"=>"organization"],function(){		
		Route::get("list",["as"=>"adminsystem.organization.getList","uses"=>"adminsystem\OrganizationController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.organization.loadData","uses"=>"adminsystem\OrganizationController@loadData"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.organization.getForm","uses"=>"adminsystem\OrganizationController@getForm"]);
		Route::post("save",["as"=>"adminsystem.organization.save","uses"=>"adminsystem\OrganizationController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.organization.deleteItem","uses"=>"adminsystem\OrganizationController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.organization.sortOrder","uses"=>"adminsystem\OrganizationController@sortOrder"]);
		Route::post("update-status",["as"=>"adminsystem.organization.updateStatus","uses"=>"adminsystem\OrganizationController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.organization.changeStatus","uses"=>"adminsystem\OrganizationController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.organization.trash","uses"=>"adminsystem\OrganizationController@trash"]);
		Route::post("upload-file",["as"=>"adminsystem.organization.uploadFile","uses"=>"adminsystem\OrganizationController@uploadFile"]);
		Route::post("create-alias",["as"=>"adminsystem.organization.createAlias","uses"=>"adminsystem\OrganizationController@createAlias"]);
	});	
	Route::group(["prefix"=>"project-article"],function(){		
		Route::get("list",["as"=>"adminsystem.project-article.getList","uses"=>"adminsystem\ProjectArticleController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.project-article.loadData","uses"=>"adminsystem\ProjectArticleController@loadData"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.project-article.getForm","uses"=>"adminsystem\ProjectArticleController@getForm"]);
		Route::post("save",["as"=>"adminsystem.project-article.save","uses"=>"adminsystem\ProjectArticleController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.project-article.deleteItem","uses"=>"adminsystem\ProjectArticleController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.project-article.sortOrder","uses"=>"adminsystem\ProjectArticleController@sortOrder"]);
		Route::post("update-status",["as"=>"adminsystem.project-article.updateStatus","uses"=>"adminsystem\ProjectArticleController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.project-article.changeStatus","uses"=>"adminsystem\ProjectArticleController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.project-article.trash","uses"=>"adminsystem\ProjectArticleController@trash"]);
		Route::post("upload-file",["as"=>"adminsystem.project-article.uploadFile","uses"=>"adminsystem\ProjectArticleController@uploadFile"]);
		Route::post("create-alias",["as"=>"adminsystem.project-article.createAlias","uses"=>"adminsystem\ProjectArticleController@createAlias"]);
	});	
	Route::group(["prefix"=>"project"],function(){		
		Route::get("list",["as"=>"adminsystem.project.getList","uses"=>"adminsystem\ProjectController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.project.loadData","uses"=>"adminsystem\ProjectController@loadData"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.project.getForm","uses"=>"adminsystem\ProjectController@getForm"]);
		Route::post("save",["as"=>"adminsystem.project.save","uses"=>"adminsystem\ProjectController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.project.deleteItem","uses"=>"adminsystem\ProjectController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.project.sortOrder","uses"=>"adminsystem\ProjectController@sortOrder"]);
		Route::post("update-status",["as"=>"adminsystem.project.updateStatus","uses"=>"adminsystem\ProjectController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.project.changeStatus","uses"=>"adminsystem\ProjectController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.project.trash","uses"=>"adminsystem\ProjectController@trash"]);
		Route::post("upload-file",["as"=>"adminsystem.project.uploadFile","uses"=>"adminsystem\ProjectController@uploadFile"]);
		Route::post("create-alias",["as"=>"adminsystem.project.createAlias","uses"=>"adminsystem\ProjectController@createAlias"]);
	});	
	Route::group(["prefix"=>"album"],function(){		
		Route::get("list",["as"=>"adminsystem.album.getList","uses"=>"adminsystem\AlbumController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.album.loadData","uses"=>"adminsystem\AlbumController@loadData"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.album.getForm","uses"=>"adminsystem\AlbumController@getForm"]);
		Route::post("save",["as"=>"adminsystem.album.save","uses"=>"adminsystem\AlbumController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.album.deleteItem","uses"=>"adminsystem\AlbumController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.album.sortOrder","uses"=>"adminsystem\AlbumController@sortOrder"]);
		Route::post("update-status",["as"=>"adminsystem.album.updateStatus","uses"=>"adminsystem\AlbumController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.album.changeStatus","uses"=>"adminsystem\AlbumController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.album.trash","uses"=>"adminsystem\AlbumController@trash"]);
		Route::post("upload-file",["as"=>"adminsystem.album.uploadFile","uses"=>"adminsystem\AlbumController@uploadFile"]);
		Route::post("create-alias",["as"=>"adminsystem.album.createAlias","uses"=>"adminsystem\AlbumController@createAlias"]);
	});	
	Route::group(["prefix"=>"supporter"],function(){		
		Route::get("list",["as"=>"adminsystem.supporter.getList","uses"=>"adminsystem\SupporterController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.supporter.loadData","uses"=>"adminsystem\SupporterController@loadData"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.supporter.getForm","uses"=>"adminsystem\SupporterController@getForm"]);
		Route::post("save",["as"=>"adminsystem.supporter.save","uses"=>"adminsystem\SupporterController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.supporter.deleteItem","uses"=>"adminsystem\SupporterController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.supporter.sortOrder","uses"=>"adminsystem\SupporterController@sortOrder"]);
		Route::post("update-status",["as"=>"adminsystem.supporter.updateStatus","uses"=>"adminsystem\SupporterController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.supporter.changeStatus","uses"=>"adminsystem\SupporterController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.supporter.trash","uses"=>"adminsystem\SupporterController@trash"]);		
	});	
	Route::group(["prefix"=>"page"],function(){		
		Route::get("list",["as"=>"adminsystem.page.getList","uses"=>"adminsystem\PageController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.page.loadData","uses"=>"adminsystem\PageController@loadData"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.page.getForm","uses"=>"adminsystem\PageController@getForm"]);
		Route::post("save",["as"=>"adminsystem.page.save","uses"=>"adminsystem\PageController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.page.deleteItem","uses"=>"adminsystem\PageController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.page.sortOrder","uses"=>"adminsystem\PageController@sortOrder"]);
		Route::post("update-status",["as"=>"adminsystem.page.updateStatus","uses"=>"adminsystem\PageController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.page.changeStatus","uses"=>"adminsystem\PageController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.page.trash","uses"=>"adminsystem\PageController@trash"]);
		Route::post("upload-file",["as"=>"adminsystem.page.uploadFile","uses"=>"adminsystem\PageController@uploadFile"]);
		Route::post("create-alias",["as"=>"adminsystem.page.createAlias","uses"=>"adminsystem\PageController@createAlias"]);
	});	
	Route::group(["prefix"=>"menu"],function(){		
		Route::match(["get","post"],"list/{menu_type_id}",["as"=>"adminsystem.menu.getList","uses"=>"adminsystem\MenuController@getList"]);	
		Route::get("form/{task}/{menu_type_id?}/{id?}/{alias?}",["as"=>"adminsystem.menu.getForm","uses"=>"adminsystem\MenuController@getForm"]);
		Route::post("save",["as"=>"adminsystem.menu.save","uses"=>"adminsystem\MenuController@save"]);
		Route::get("delete-item/{id}",["as"=>"adminsystem.menu.deleteItem","uses"=>"adminsystem\MenuController@deleteItem"]);		
		Route::post("sort-order/{menu_type_id}",["as"=>"adminsystem.menu.sortOrder","uses"=>"adminsystem\MenuController@sortOrder"]);
		Route::post("update-status/{status}/{menu_type_id}",["as"=>"adminsystem.menu.updateStatus","uses"=>"adminsystem\MenuController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.menu.changeStatus","uses"=>"adminsystem\MenuController@changeStatus"]);
		Route::post("trash/{menu_type_id}",["as"=>"adminsystem.menu.trash","uses"=>"adminsystem\MenuController@trash"]);
		Route::post("upload-file",["as"=>"adminsystem.menu.uploadFile","uses"=>"adminsystem\MenuController@uploadFile"]);
		Route::get("component/{menu_type_id}",["as"=>"adminsystem.menu.getComponentForm","uses"=>"adminsystem\MenuController@getComponentForm"]);
		Route::get("category-article-component/{menu_type_id}",["as"=>"adminsystem.menu.getCategoryArticleComponent","uses"=>"adminsystem\MenuController@getCategoryArticleComponent"]);
		Route::get("category-product-component/{menu_type_id}",["as"=>"adminsystem.menu.getCategoryProductComponent","uses"=>"adminsystem\MenuController@getCategoryProductComponent"]);
		Route::get("article-component/{menu_type_id}",["as"=>"adminsystem.menu.getArticleComponent","uses"=>"adminsystem\MenuController@getArticleComponent"]);
		Route::post("article-list",["as"=>"adminsystem.menu.getArticleList","uses"=>"adminsystem\MenuController@getArticleList"]);		
		Route::get("product-component/{menu_type_id}",["as"=>"adminsystem.menu.getProductComponent","uses"=>"adminsystem\MenuController@getProductComponent"]);
		Route::post("product-list",["as"=>"adminsystem.menu.getProductList","uses"=>"adminsystem\MenuController@getProductList"]);
		Route::get("page-component/{menu_type_id}",["as"=>"adminsystem.menu.getPageComponent","uses"=>"adminsystem\MenuController@getPageComponent"]);		
		Route::post("page-list",["as"=>"adminsystem.menu.getPageList","uses"=>"adminsystem\MenuController@getPageList"]);		
	});	
	Route::group(["prefix"=>"group"],function(){		
		Route::match(["get","post"],"list",["as"=>"adminsystem.group.getList","uses"=>"adminsystem\GroupController@getList"]);
		Route::get("add",["as"=>"adminsystem.group.getAdd","uses"=>"adminsystem\GroupController@getAdd"]);
		Route::post("add",["as"=>"adminsystem.group.postAdd","uses"=>"adminsystem\GroupController@postAdd"]);
		Route::get("edit/{id}",["as"=>"adminsystem.group.getEdit","uses"=>"adminsystem\GroupController@getEdit"]);
		Route::post("edit",["as"=>"adminsystem.group.postEdit","uses"=>"adminsystem\GroupController@postEdit"]);
		Route::get("delete/{id}",["as"=>"adminsystem.group.getDelete","uses"=>"adminsystem\GroupController@getDelete"]);
	});	
	Route::group(["prefix"=>"menu-type"],function(){		
		Route::get("list",["as"=>"adminsystem.menu-type.getList","uses"=>"adminsystem\MenuTypeController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.menu-type.loadData","uses"=>"adminsystem\MenuTypeController@loadData"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.menu-type.getForm","uses"=>"adminsystem\MenuTypeController@getForm"]);
		Route::post("save",["as"=>"adminsystem.menu-type.save","uses"=>"adminsystem\MenuTypeController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.menu-type.deleteItem","uses"=>"adminsystem\MenuTypeController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.menu-type.sortOrder","uses"=>"adminsystem\MenuTypeController@sortOrder"]);
		Route::post("update-status",["as"=>"adminsystem.menu-type.updateStatus","uses"=>"adminsystem\MenuTypeController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.menu-type.changeStatus","uses"=>"adminsystem\MenuTypeController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.menu-type.trash","uses"=>"adminsystem\MenuTypeController@trash"]);		
	});		
	
	Route::group(["prefix"=>"module-item"],function(){		
		Route::get("list",["as"=>"adminsystem.module-item.getList","uses"=>"adminsystem\ModuleItemController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.module-item.loadData","uses"=>"adminsystem\ModuleItemController@loadData"]);		
		Route::post("load-data-article",["as"=>"adminsystem.module-item.loadDataArticle","uses"=>"adminsystem\ModuleItemController@loadDataArticle"]);	
		Route::post("load-data-product",["as"=>"adminsystem.module-item.loadDataProduct","uses"=>"adminsystem\ModuleItemController@loadDataProduct"]);
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.module-item.getForm","uses"=>"adminsystem\ModuleItemController@getForm"]);
		Route::post("save",["as"=>"adminsystem.module-item.save","uses"=>"adminsystem\ModuleItemController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.module-item.deleteItem","uses"=>"adminsystem\ModuleItemController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.module-item.sortOrder","uses"=>"adminsystem\ModuleItemController@sortOrder"]);
		Route::post("update-status",["as"=>"adminsystem.module-item.updateStatus","uses"=>"adminsystem\ModuleItemController@updateStatus"]);
		Route::post("change-status",["as"=>"adminsystem.module-item.changeStatus","uses"=>"adminsystem\ModuleItemController@changeStatus"]);
		Route::post("trash",["as"=>"adminsystem.module-item.trash","uses"=>"adminsystem\ModuleItemController@trash"]);		
		Route::post("insert-article",["as"=>"adminsystem.module-item.insertArticle","uses"=>"adminsystem\ModuleItemController@insertArticle"]);	
		Route::post("insert-product",["as"=>"adminsystem.module-item.insertProduct","uses"=>"adminsystem\ModuleItemController@insertProduct"]);			
		Route::post("sort-items",["as"=>"adminsystem.module-item.sortItems","uses"=>"adminsystem\ModuleItemController@sortItems"]);		
		Route::post("get-items",["as"=>"adminsystem.module-item.getItems","uses"=>"adminsystem\ModuleItemController@getItems"]);				
	});
	Route::group(["prefix"=>"media"],function(){		
		Route::get("list",["as"=>"adminsystem.media.getList","uses"=>"adminsystem\MediaController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.media.loadData","uses"=>"adminsystem\MediaController@loadData"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.media.getForm","uses"=>"adminsystem\MediaController@getForm"]);
		Route::post("save",["as"=>"adminsystem.media.save","uses"=>"adminsystem\MediaController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.media.deleteItem","uses"=>"adminsystem\MediaController@deleteItem"]);				
		Route::post("trash",["as"=>"adminsystem.media.trash","uses"=>"adminsystem\MediaController@trash"]);		
		Route::post("upload-file",["as"=>"adminsystem.media.uploadFile","uses"=>"adminsystem\MediaController@uploadFile"]);	
	});		
	Route::group(["prefix"=>"group-member"],function(){		
		Route::get("list",["as"=>"adminsystem.group-member.getList","uses"=>"adminsystem\GroupMemberController@getList"]);
		Route::post("load-data",["as"=>"adminsystem.group-member.loadData","uses"=>"adminsystem\GroupMemberController@loadData"]);		
		Route::get("form/{task}/{id?}",["as"=>"adminsystem.group-member.getForm","uses"=>"adminsystem\GroupMemberController@getForm"]);
		Route::post("save",["as"=>"adminsystem.group-member.save","uses"=>"adminsystem\GroupMemberController@save"]);
		Route::post("delete-item",["as"=>"adminsystem.group-member.deleteItem","uses"=>"adminsystem\GroupMemberController@deleteItem"]);		
		Route::post("sort-order",["as"=>"adminsystem.group-member.sortOrder","uses"=>"adminsystem\GroupMemberController@sortOrder"]);		
		Route::post("trash",["as"=>"adminsystem.group-member.trash","uses"=>"adminsystem\GroupMemberController@trash"]);		
	});	
});
Route::match(["get","post"],"adminsystem/login",["as"=>"adminsystem.login","uses"=>"adminsystem\LoginController@login"]);
Route::post("adminsystem/logout",["as"=>"adminsystem.logout","uses"=>"adminsystem\LoginController@logout"]);

Route::get("/",["as"=>"frontend.index.getHome","uses"=>"frontend\IndexController@getHome"]);
Route::match(["get","post"],"{alias}.html",["as"=>"frontend.index.index","uses"=>"frontend\IndexController@index"]);
Route::match(["get","post"],"gio-hang",["as"=>"frontend.index.viewCart","uses"=>"frontend\IndexController@viewCart"]);
Route::match(["get","post"],"xoa-gio-hang",["as"=>"frontend.index.deleteAll","uses"=>"frontend\IndexController@deleteAll"]);
Route::match(["get","post"],"xoa/{id}",["as"=>"frontend.index.delete","uses"=>"frontend\IndexController@delete"]);
Route::match(["get","post"],"dang-ky",["as"=>"frontend.index.register","uses"=>"frontend\IndexController@register"]);
Route::match(["get","post"],"tai-khoan",["as"=>"frontend.index.viewAccount","uses"=>"frontend\IndexController@viewAccount"]);
Route::match(["get","post"],"dang-nhap",["as"=>"frontend.index.login","uses"=>"frontend\IndexController@login"]);
Route::match(["get","post"],"dang-nhap-tham-gia/{project_alias?}",["as"=>"frontend.index.loginJoinProject","uses"=>"frontend\IndexController@loginJoinProject"]);
Route::match(["get","post"],"bao-mat",["as"=>"frontend.index.viewSecurity","uses"=>"frontend\IndexController@viewSecurity"]);
Route::match(["get","post"],"lien-he",["as"=>"frontend.index.contact","uses"=>"frontend\IndexController@contact"]);
Route::get("thanh-toan",["as"=>"frontend.index.checkout","uses"=>"frontend\IndexController@checkout"]);
Route::match(["get","post"],"xac-nhan-thanh-toan",["as"=>"frontend.index.confirmCheckout","uses"=>"frontend\IndexController@confirmCheckout"]);
Route::match(["get","post"],"dang-nhap-thanh-toan",["as"=>"frontend.index.loginCheckout","uses"=>"frontend\IndexController@loginCheckout"]);
Route::get("hoa-don",["as"=>"frontend.index.getInvoice","uses"=>"frontend\IndexController@getInvoice"]);
Route::get("lgout",["as"=>"frontend.index.getLgout","uses"=>"frontend\IndexController@getLgout"]);
Route::get("add-to-cart",["as"=>"frontend.index.addToCart","uses"=>"frontend\IndexController@addToCart"]);
Route::get("show-invoice-detail",["as"=>"frontend.index.showInvoiceDetail","uses"=>"frontend\IndexController@showInvoiceDetail"]);
Route::post("get-paymentmethod",["as"=>"frontend.index.getPaymentmethod","uses"=>"frontend\IndexController@getPaymentmethod"]);
Route::post("tim-kiem",["as"=>"frontend.index.search","uses"=>"frontend\IndexController@search"]);
Route::post("join-project",["as"=>"frontend.index.joinProject","uses"=>"frontend\IndexController@joinProject"]);
Route::post("load-data-member",["as"=>"frontend.index.loadDataMember","uses"=>"frontend\IndexController@loadDataMember"]);	
Route::post("load-data-supporter",["as"=>"frontend.index.loadDataSupporter","uses"=>"frontend\IndexController@loadDataSupporter"]);		
Route::post("tim-kiem-san-pham",["as"=>"frontend.index.searchProduct","uses"=>"frontend\IndexController@searchProduct"]);
?>