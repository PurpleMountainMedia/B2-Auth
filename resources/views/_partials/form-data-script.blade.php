<script>
  window.b2FormData = {
    old: @json(session()->getOldInput()),
    errors: @json($errors->messages()),
    csrfToken: "{{ csrf_token() }}"
  }
</script>
