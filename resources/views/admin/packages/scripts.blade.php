	@push('scripts')
		<script>
			$('select').select2();
		</script>
		
		{{-- File Manager --}}
		<script>
			var route_prefix = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
		    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
		    $('#lfm').filemanager('image', {prefix: route_prefix});
		  </script>


		{{-- TinyMce --}}
		<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	  	<script>
		    var editor_config = {
		      	path_absolute : "",
		      	selector: "textarea[id=tm]",
		      	plugins: [
		        	"link image"
		      	],
		      	relative_urls: false,
		      	height: 129,
		      	file_browser_callback : function(field_name, url, type, win) {
		        	var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
		        	var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

		        	var cmsURL = editor_config.path_absolute + route_prefix + '?field_name=' + field_name;
		        	if (type == 'image') {
		          		cmsURL = cmsURL + "&type=Images";
		        	} else {
		          		cmsURL = cmsURL + "&type=Files";
		        	}
		        	tinyMCE.activeEditor.windowManager.open({
		          		file : cmsURL,
			          	title : 'Filemanager',
			          	width : x * 0.8,
			          	height : y * 0.8,
			          	resizable : "yes",
			          	close_previous : "no"
		        	});
		      	}
		    };
		    tinymce.init(editor_config);
	  	</script>

	  	
		{{-- CK Editor --}}
	  	<script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/	ckeditor.js"></script>
		 <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/adapters/jquery.js"></script>
		 <script>
		    $('textarea[id=ce]').ckeditor({
		      height: 100,
		      filebrowserImageBrowseUrl: route_prefix + '?type=Images',
		      filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
		      filebrowserBrowseUrl: route_prefix + '?type=Files',
		      filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
		    });
		  </script>
	@endpush
