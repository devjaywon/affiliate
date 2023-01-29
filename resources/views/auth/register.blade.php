
<x-app-layout>
    <div class="card-header">{{ __('Register') }}</div>
    <form class="form" method="POST" action="{{ route('register') }}">
    	      @csrf
        <p>You are a step away from achieving that 7 digits income</p>
        
        <input type="text" id="fname" placeholder="First Name" class=" @error('firstbank') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}"><br>
        	
        <input type="text" id="lname" placeholder="Middle-name" class=" @error('middlename;') is-invalid @enderror" name="middlename" value="{{ old('middllename') }}"><br>
        	
        <input type="text" id="lname" placeholder="Surname" class=" @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}"><br>
        	
        <input type="email" id="lname" placeholder="Email Address" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"><br>
        	
        <input type="number" id="lname" placeholder="Phone Number"  ><br>
        	@error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" 
        <input type="password" id="lname" placeholder="Passwrord" class=" @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}"><br>
        	
        <input type="password" id="lname" placeholder="Confirm Password" name="confirm-password" required autocomplete="confirm-password" >
        <div>
            <input type="checkbox" id="lname"><p class="agreed">I have read and agreed to the Privacy Policy and Terms & Conditions on this platform</p>
        </div>
        <div class="sign-up-button">
            <input type="submit" value=" {{ __('Register') }}">
            <p>Already a Member</p>
            <a href="/sign-in.html">Login Instead</a>
        </div>
        
    </form>

    <form class="form1" action="">
     	      @csrf
        <p>You are a step away from achieving that 7 digits income</p>
        
        <input type="text" id="fname" placeholder="First Name" class=" @error('firstbank') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}"><br>
        	
        <input type="text" id="lname" placeholder="Middle-name" class=" @error('middlename;') is-invalid @enderror" name="middlename" value="{{ old('middllename') }}"><br>
        	
        <input type="text" id="lname" placeholder="Surname" class=" @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}"><br>
        	
        <input type="email" id="lname" placeholder="Email Address" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"><br>
        	
        <input type="number" id="lname" placeholder="Phone Number" class="@error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" ><br>
        	
        <input type="password" id="lname" placeholder="Passwrord" class=" @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}"><br>
        	
        <input type="password" id="lname" placeholder="Confirm Password" name="confirm-password" required autocomplete="confirm-password" >
        <div>
            <input type="checkbox" id="lname"><p class="agreed">I have read and agreed to the Privacy Policy and Terms & Conditions on this platform</p>
        </div>
        <div class="sign-up-button">
            <input type="submit" value=" {{ __('Register') }}">
            <p>Already a Member</p>
            <a href="/sign-in.html">Login Instead</a>
        </div>
        
    </form>

</x-app-layout>