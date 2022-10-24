@if(session()->has('message'))

{{-- <div 
 x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
    class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-laravel text-white px-48 py-3"
    >

<p>

    {{session('message')}}
</p>
</div> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script> --}}

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
    $('.show_confirm').click(function(event) {
         var form =  $(this).closest("form");
         var name = $(this).data("name");
         event.preventDefault();
         swal({
             title: `Are you sure you want to delete this record?`,
             text: "If you delete this, it will be found in Trush.",
             icon: "warning",
             buttons: true,
             dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
             form.submit();
           }
         });
     });
 
</script>

    <script>
            // swal('Success!', '{{ Session::get('message') }}', 'success');

//  Swal.fire({
//   position: 'top-end',
//   icon: 'success',
//   title: {{session('message')}},
//   showConfirmButton: false,
//   timer: 1500
// })
    </script>
@endif