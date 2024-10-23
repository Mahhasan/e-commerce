<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Supplier Registration Form</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="suppliarstyle.css" />
  </head>
  <body>
    <?php 

        $allsuppliar = \App\Models\SuppliarInfo::all();
        
    ?>
    <section class="container">
      <header>Supplier Registration Form</header>
      <a class="btn btn-success"  href="{{ route('login')}}">Back To Login</a>
      <form action="{{ route('createsuppliar')}}" method="post" class="form">
          @csrf
               <label>Suppliar List</label><br>
               <select class="form-control" name="suppliar" id="name-select">
                <option value="" hidden>Select Supplier</option>
                @foreach($allsuppliar as $suppliar)
                    <option value="{{ $suppliar->id }}" data-name="{{ $suppliar->name }}" data-company="{{ $suppliar->companyname }}" data-address="{{ $suppliar->address }}"   data-mobile="{{ $suppliar->mobile }}">{{ $suppliar->name }}</option>
                @endforeach
        </select>
        <div class="input-box">
          <label>Company Name</label>
          <input style="color:red; font-weight:bold" type="text" name="companyname" id="companyname" placeholder="Enter full name" required />
        </div>
        <div class="input-box">
          <label>Owner Name</label>
          <input style="color:red; font-weight:bold" type="text" id="name" name="name" placeholder="Enter full name" required />
        </div>
        <div class="input-box">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter email address" required />
        </div>
        <div class="input-box">
          <label>Password</label>
          <input type="text" name="password" placeholder="Enter email address" required />
        </div>
        <div class="input-box">
          <label>Address</label>
          <input style="color:red; font-weight:bold" type="text" id="address" name="address" placeholder="Enter full Address" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input style="color:red; font-weight:bold" type="number" id="number" name="number" placeholder="Enter phone number" required />
          </div>
        </div>
        </div>
        <button type="submit" class="button">Submit</button>
      </form>
    </section>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include jQuery and Bootstrap (already included in your template) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('name-select').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var mobileNumber = selectedOption.getAttribute('data-mobile');
            document.getElementById('number').value = mobileNumber;
            var companyname = selectedOption.getAttribute('data-company');
            document.getElementById('companyname').value = companyname;
            var name = selectedOption.getAttribute('data-name');
            document.getElementById('name').value = name;
            var address = selectedOption.getAttribute('data-address');
            document.getElementById('address').value = address;
        });

    </script>
  </body>
</html>

