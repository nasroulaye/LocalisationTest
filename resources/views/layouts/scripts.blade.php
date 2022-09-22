<!-- Latest compiled and minified jQuery Library -->
<script src="{{ asset('js/jquery.min.js') }}"></script>

<!-- Bootstrap JS -->
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- Livequery plugin -->
<script src="{{ asset('js/jquery.livequery.js') }}"></script>

<script src="{{ asset('js/jquery-confirm.min.js') }}"></script>
<script src="{{ asset('js/jquery.mask.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('js/jquery.scrollbar.js') }}"></script>
<script src="{{ asset('js/Chart.min.js') }}"></script>
<script src="{{ asset('js/html2pdf.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery.uploader.js') }}"></script>
<script src="{{ asset('js/lightbox.js') }}"></script>
<script src="{{ asset('js/file_upload/fileinput.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-timepicker.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>

<!-- sceditor -->
<script src="{{ asset('js/minified/sceditor.min.js') }}"></script>
<script src="{{ asset('js/minified/formats/bbcode.js') }}"></script>
<script src="{{ asset('js/minified/icons/material.js') }}"></script>

<!-- Scroll -->
<link rel="stylesheet" href="{{ asset('css/jquery.jscrollpane.css') }}">
<script src="{{ asset('js/jquery.jscrollpane.min.js') }}"></script>
<script src="{{ asset('js/jquery.mousewheel.js') }}"></script>

<script>
	var path         = '<?=path?>';
	var lang         = <?=json_encode($lang)?>;
	var nophoto      = '<?=nophoto?>';
</script>

<script src="{{ asset('js/custom.js') }}"></script>

<?php if ($pg == "pages" && $request == 'new'): ?>
<?php else: ?>
<script src="{{ asset('js/scroll.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/scroll.css') }}">
<?php endif; ?>


