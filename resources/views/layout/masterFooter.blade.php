</div>

{{-- JSファイルの読み込みはココ以降で行う --}}
<script type="text/javascript" src="/system_lara/public/js/app.js"></script>
<script type="text/javascript" src="/system_lara/public/js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="/system_lara/public/js/sytemsend.js"></script>
<script type="text/javascript" src="/system_lara/public/css/Semantic-UI-CSS/semantic.min.js"></script>
<script type="text/javascript" src="/system_lara/public/js/setup.js"></script>
<script type="text/javascript" src="/system_lara/public/js/dnd.js"></script>
<script type="text/javascript" src="/system_lara/public/js/changeEffect.js"></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/mermaid/0.5.8/mermaid.js'></script>
<script type='text/javascript' src='/system_lara/public/js/vis.js/dist/vis.min.js'></script>
@if (isset($lr_id))
<script type='text/javascript' src='/system_lara/public/js/CreateModel.js' data-lmId = {{$lm_id}} data-lrId = {{$lr_id}} id="createModel"></script>
@endif
<script type='text/javascript' src='/system_lara/public/js/CreateModel_sample.js'></script>
<script type="text/javascript">
    $('.ui.dropdown').dropdown();
</script>




{{-- ドロワー関連ココから↓ --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script>
$(function() {
   $('.drawer').drawer();
});
</script>
{{-- ココまで --}}

</body>

<footer class="footer">
    <p>
        by HarukiHahimoto
    </p>
</footer>
</html>
