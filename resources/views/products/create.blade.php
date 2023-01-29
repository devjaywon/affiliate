
<x-app-layout>
    <div class="card-header">{{ __('Register') }}</div>
    <form class="form" method="POST" action="{{ route('products.store') }}">
    	      @csrf
        <p> Add Products here, Products are subjected to approval</p>

       <input type="text" id="lname" placeholder="Products Name" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" ><br>
       
        <textarea id="description" rows="3" placeholder="Enter discription" class="@error('discription') is-invalid @enderror" name="discription" value="{{ old('description') }}"></textarea><br>
       		
        <textarea id="content" rows="5" placeholder="Brief Content" class="@error('content') is-invalid @enderror" name="content" value="{{ old('content') }}"></textarea><br>
       
        <input type="file" id="file multiple" placeholder="Upload Images"  name="images[]" value="{{ old('images') }}" ><br>
       
        <div>
            <input type="checkbox" id="lname"><p class="agreed">I have read and agreed to the Privacy Policy and Terms & Conditions on this platform</p>
        </div>
        <div class="sign-up-button">
            <input type="submit" value=" {{ __('Create Product') }}">
          
        </div>
        
    </form>

    <form class="form1" action="">
        @csrf
        <p> Add Products here, Products are subjected to approval</p>

       <input type="text" id="lname" placeholder="Products Name" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" ><br>
       
        <textarea id="description" rows="3" placeholder="Enter discription" class="@error('discription') is-invalid @enderror" name="discription" value="{{ old('description') }}"></textarea><br>
       		
        <textarea id="content" rows="5" placeholder="Brief Content" class="@error('content') is-invalid @enderror" name="content" value="{{ old('content') }}"></textarea><br>
       
        <input type="file" id="file multiple" placeholder="Upload Images"  name="images[]" value="{{ old('images') }}" ><br>
       
        <div>
            <input type="checkbox" id="lname"><p class="agreed">I have read and agreed to the Privacy Policy and Terms & Conditions on this platform</p>
        </div>
        <div class="sign-up-button">
            <input type="submit" value=" {{ __('Create Product') }}">
          
        </div>
        
    </form>

</x-app-layout>