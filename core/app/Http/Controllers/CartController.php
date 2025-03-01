<?php

namespace App\Http\Controllers;

use App\Constants\Status;
use App\Models\Product;
use App\Models\Quote;
use App\Models\QuoteItem;
use App\Lib\CartManager;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    // private $cartManager;

    // public function __construct(CartManager $cartManager)
    // {
    //     parent::__construct();
    //     $this->cartManager = $cartManager;
    // }

    // public function partialCart()
    // {
    //     $cartData       = $this->cartManager->getCart();
    //     $cartItems      = $cartData->sortByDesc('id');
    //     $subtotal       = $this->cartManager->subtotal($cartData);
    //     $coupon         = session('coupon');

    //     return view('Template::cart', compact('cartData', 'cartItems', 'subtotal', 'coupon'))->render();
    // }

    // public function cartItemsCount()
    // {
    //     return $this->cartManager->setCartCount();
    // }

    // public function cartSubtotal()
    // {
    //     return $this->cartManager->subtotal();
    // }

    // public function cart()
    // {
    //     $pageTitle         = 'My Cart';
    //     $cartData          = $this->cartManager->getCart();
    //     $subtotal          = $this->cartManager->subtotal($cartData);
    //     $productCategories = $this->cartManager->getCartCategories($cartData);
    //     return view('Template::cart', compact('pageTitle', 'cartData', 'subtotal', 'productCategories'));
    // }

    // private function cartDataValidation(Request $request, Product $product)
    // {
    //     $attributeValuesValidation = $product->product_type == Status::PRODUCT_TYPE_VARIABLE ? 'required' : 'nullable';
    //     return Validator::make($request->all(), [
    //         'quantity'              => 'required|integer|gt:0',
    //         'attribute_values'      => $attributeValuesValidation . '|array|size:' . $product->attributes_count,
    //         'attribute_values.*'    => 'required_with:attribute_values|exists:attribute_values,id'
    //     ], [
    //         'attribute_values.required' => 'Please select variants',
    //         'attribute_values.size' => 'All variants must be selected'
    //     ]);
    // }

    // public function addToCart(Request $request, int $productId)
    // {
    //     $product = Product::with('productVariants')->withCount('attributes')->find($productId);

    //     if (!$product) {
    //         return errorResponse('Product not found');
    //     }

    //     $validator = $this->cartDataValidation($request, $product);

    //     if ($validator->fails()) {
    //         return errorResponse($validator->errors());
    //     }

    //     list($variant, $variantError) = $this->cartManager->getVariantDetails($request, $product);

    //     if ($variantError) {
    //         return errorResponse($variantError);
    //     }

    //     $isPriceSet = $this->isPriceSet($product, $variant);

    //     if ($isPriceSet['error']) {
    //         return errorResponse($isPriceSet['error']);
    //     }


    //     $stockQuantity = $product->inStock($variant);
    //     $cartItem      = $this->cartManager->getSingleCartItemByProduct($productId, @$variant->id);

    //     $cartQuantity  = ($cartItem->quantity ?? 0) + $request->quantity;
    //     $checkQuantity = $this->cartManager->checkCartQuantity($product, $variant, $stockQuantity, $cartQuantity);

    //     if (isset($checkQuantity['error'])) {
    //         return errorResponse($checkQuantity['error']);
    //     }

    //     $this->cartManager->updateOrCreateCartItem($cartItem, $cartQuantity, $product->id, @$variant->id);

    //     return successResponse('Added to cart', [
    //         'partialCartData' => $this->partialCart(),
    //         'cartItemCount'   => $this->cartItemsCount(),
    //         'cartSubtotal'    => $this->cartSubtotal(),
    //     ]);
    // }

    // private function isPriceSet($product, $variant)
    // {
    //     if (!$product->prices($variant)->regular_price) {
    //         return ['error' => 'This product is not available for sale now'];
    //     }
    //     return ['error' => false];
    // }

    // public function updateCartItem(Request $request, $id)
    // {
    //     $cartItem = $this->cartManager->getSingleCartItem($id);

    //     if (!$cartItem) {
    //         return errorResponse('Cart item not found');
    //     }

    //     $validator = Validator::make($request->all(), [
    //         'quantity' => 'required|numeric|gt:0',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json($validator->errors()->all());
    //     }

    //     $product = $cartItem->product;
    //     $variant = $cartItem->productVariant;

    //     $stockQuantity = $product->inStock($variant);

    //     $checkQuantity = $this->cartManager->checkCartQuantity($cartItem->product, $variant, $stockQuantity,  $request->quantity);
    //     if (isset($checkQuantity['error'])) {
    //         return errorResponse($checkQuantity['error'], ['quantity' => $cartItem->quantity]);
    //     }

    //     $isPriceSet = $this->isPriceSet($product, $variant);

    //     if ($isPriceSet['error']) {
    //         return errorResponse($isPriceSet['error'],  ['quantity' => $cartItem->quantity]);
    //     }

    //     $this->cartManager->updateOrCreateCartItem($cartItem, $request->quantity);
    //     return successResponse('Quantity updated');
    // }

    // public function removeCartItem($id)
    // {
    //     $cart = $this->cartManager->getSingleCartItem($id);
    //     if (!$cart) {
    //         return errorResponse('Item not found');
    //     }

    //     $cart->delete();
    //     $this->cartManager->removeCouponFromSession();

    //     return successResponse('Item deleted successfully', [
    //         'partialCartData' => $this->partialCart(),
    //         'cartItemCount'   => $this->cartItemsCount()
    //     ]);
    // }

    // public function applyCoupon(Request $request)
    // {
    //     if (session()->has('coupon')) {
    //         return errorResponse('You have already applied a coupon');
    //     }

    //     $validator = Validator::make($request->all(), ['code' => 'required|string']);

    //     if ($validator->fails()) {
    //         return errorResponse($validator->errors());
    //     }

    //     $subtotal    = $this->cartManager->subtotal();
    //     $coupon      = $this->cartManager->getCouponByCode($request->code);

    //     if (!$coupon) {
    //         return errorResponse('Invalid coupon code');
    //     }

    //     $checkCoupon = $this->cartManager->isValidCoupon($coupon, $subtotal);

    //     if (isset($checkCoupon['error'])) {
    //         return errorResponse($checkCoupon['error']);
    //     }

    //     $amount = $coupon->discountAmount($subtotal);
    //     session()->put('coupon', ['code' => $request->code, 'amount' => $amount]);

    //     return successResponse('Coupon applied successfully', [
    //         'coupon_code' => $coupon->coupon_code,
    //         'amount'      => getAmount($amount),
    //     ]);
    // }

    // public function removeCoupon()
    // {
    //     $this->cartManager->removeCouponFromSession();
    //     return successResponse('Coupon removed successfully');
    // }






    public function removeFromCart($productId)
    {


        $cart = session()->get('cart', []);

        $found = false;

        foreach ($cart as $key => $item) {
            if ($item['product_id'] == $productId) {
                unset($cart[$key]);
                $found = true;
            }
        }

        if ($found) {
            session()->put('cart', $cart);
            return back()->with('success', 'Item Removed');
        }

        return back()->with('success', 'Item not found');
    }

    public function update(Request $request)
    {
        $cart = session()->get('cart', []);

        // This will be an associative array: [ productId => newQuantity, ... ]
        $quantities = $request->input('quantities', []);

        foreach ($cart as $index => $item) {
            $productId = $item['product_id'];

            // If the user updated the quantity for this product
            if (isset($quantities[$productId])) {
                $newQty = (int) $quantities[$productId];
                // At least 1
                $cart[$index]['quantity'] = max(1, $newQty);
            }
        }

        // Save updated cart back to session
        session()->put('cart', $cart);

        // Show a success message
        return back()->with('success', 'Cart updated successfully.');
    }

    public function requestQuote(Request $request)
    {
        // Validate the user’s input
        $data = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'email'      => 'required|email',
            'phone'          => 'required|string|max:20|min:11',
            'address'        => 'required|string|max:255',
            // etc.
        ]);

        // Create a new quote record
        $quote = Quote::create([
            'first_name'     => $data['first_name'],
            'last_name'      => $data['last_name'],
            'email'          => $data['email'],
            'phone'          => $request->input('phone'),
            'address'        => $request->input('address'),
            'business_name'  => $request->input('business_name'),
            'business_type'  => $request->input('business_type'),
            'license_type'   => $request->input('license_type'),
            'license_number' => $request->input('license_number'),
            'message'        => $request->input('message'),
            'status'         => 'pending', // or any default
        ]);


        // Retrieve cart items from session
        $cart = session()->get('cart', []);
        // dd($cart);

        // Insert each cart item into quote_items
        foreach ($cart as $item) {
            QuoteItem::create([
                'quote_id'   => $quote->id,
                'product_id' => $item['product_id'],
                'variant_id' => $item['variant_id'] ?? null,
                'base_size'  => $item['base_size'] ?? 'N/A',  // ✅ Storing base_size!
                'quantity'   => $item['quantity'],
            ]);
        }

        // Optionally clear the cart
        session()->forget('cart');

        // Redirect with success message
        return redirect()->route('quote')->with('success', 'Your quote request has been submitted!');
    }

    public function index()
    {
        $cart = session()->get('cart', []);
        $cartProducts = [];
        // dd($cart);

        foreach ($cart as $key => $item) {
            // Get the product using the product_id
            $product = Product::find($item['product_id']);

            if ($product) {
                $productData['product'] = $product;
                $productData['quantity'] = $item['quantity'];

                // If there's a variant_id, get the variant details
                if (isset($item['variant_id'])) {
                    $variant = ProductVariant::find($item['variant_id']);
                    $productData['variant'] = $variant;
                } else {
                    $productData['variant'] = 'N/A';
                }

                // Fetch Base Size from attribute_values where attribute is "Base Size"
                // $baseSize = $product->attributeValues()
                //     ->whereHas('attribute', function ($query) {
                //         $query->where('name', 'Base Size');
                //     })
                //     ->pluck('value')
                //     ->first(); // Get the first available Base Size

                $productData['base_size'] = $item['base_size'] ?? 'N/A';

                // Add the product data to the cart products array
                $cartProducts[] = $productData;
            } else {
                $cartProducts[] = [
                    'product_id' => $item['product_id'],
                    'product_name' => 'Product not found',
                    'variant' => 'N/A',
                    'quantity' => $item['quantity'],
                    'base_size' => 'N/A',
                ];
            }
        }

        return view('Template::quote', compact('cartProducts'));
    }
}
