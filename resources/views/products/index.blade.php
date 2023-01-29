<x-app-layout>
    
    <main class="mobile-product-container">
        <div class="we-meant-container-mobile">
            <div></div>
            <p>The best value for your money all we listed here</p>
            <div></div>
        </div>
        @foreach ($products as $product)

            
   
        <div class="product-home-container">
            <div class="product-container">

                
               <a href="{{ route('products.show', $product->slug ) }}"> {{ $product->name }} </a> 
               <br>
                {{ $product->description }} <br>
                {{ $product->content }} <br>
                @foreach ($product->images as $image)

                  {{ $image->file_name }}  
                @endforeach
                    

                
            
            
        </div>
        @endforeach
    </main>

    <main>

        <div class="we-meant-container">
            <div></div>
            <p>The best value for your money all we listed here</p>
            <div></div>
        </div>

        <div class="outer-container-for-product">
            <div class="desktop-product-container">
                <div class="desktop-product-home-container">
                    <div class="product-container-d"></div>
                
                </div>
                <div class="desktop-product-home-container">
                    <div class="product-container-d"></div>
                
                </div>
    
                <div class="desktop-product-home-container">
                    <div class="product-container-d"></div>
                
                </div>
    
                
            
            </div>
    
            <div class="desktop-product-container">
                <div class="desktop-product-home-container">
                    <div class="product-container-d"></div>
                
                </div>
    
                <div class="desktop-product-home-container">
                    <div class="product-container-d"></div>
                
                </div>
    
                <div class="desktop-product-home-container">
                    <div class="product-container-d"></div>
                
                </div>
            
            </div>
    
          
            
        </div>
    </main>



</x-app-layout>