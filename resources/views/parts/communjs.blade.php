<script>
	@if (notify()->ready())
	        swal({
	              title: "{{ notify()->message() }}",
	              type: "{{ notify()->type() }}"
	        });
	@endif
</script>

