<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Config;
use App\Models\Product;
use App\Models\Shipping;
use App\Models\Inventory;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function index($slug)
    {
        $product = Product::where('slugs', $slug)->first();
        if ($product) {
            $config = Config::first();
            $shipping = Shipping::get();
            $relatedProduct = null;
            if ($product->category) {
                $relatedProduct = Product::where('category_id', $product->category->id)->get();
            }

            return view('themes.landing.index', [
                'product' => $product,
                'related' => $relatedProduct,
                'config'  => $config,
                'shippings' => $shipping,
            ]);
        }
    }

    private $package = [
        [
            'id' => 1,
            'name' => '10 KG',
            'price' => 1350,
        ],
        [
            'id' => 2,
            'name' => '12 KG',
            'price' => 1600,
        ],
        [
            'id' => 3,
            'name' => '22 KG',
            'price' => 2850,
        ],
        [
            'id' => 4,
            'name' => '32 KG',
            'price' => 4050,
        ],
        [
            'id' => 5,
            'name' => '42 KG',
            'price' => 5250,
        ],
    ];

    public function landingView($slug)
    {
        $product = Product::where('slugs', $slug)->first();

        if ($product) {
            $config = Config::first();
            $shipping = Shipping::get();
            $relatedProduct = null;
            if ($product->category) {
                $relatedProduct = Product::where('category_id', $product->category->id)->get();
            }

            $availableColors = [];
            if ($product->attributes->isNotEmpty()) {
                $availableColors = $product->attributes->groupBy('color_id')->map(function ($items) {
                    // Get the first item in the group to fetch color and image details
                    $color = $items->first()->color;
                    $colorImage = $items->first()->image ?? 'path_to_default_image.jpg'; // Provide default image if null

                    return [
                        'id' => $color->id,              // Color ID
                        'name' => $color->name,          // Color name
                        'code' => $color->code,          // Color code (for display)
                        'image' => $colorImage,          // Image for the color
                        'inventory_id' => $items->first()->id,  // Inventory ID for the first color-size combination
                        'sizes' => $items->map(function ($item) {
                            return [
                                'inventory_id' => $item->id,       // Specific Inventory ID for this size
                                'size_id' => $item->size->id ?? null,
                                'size_name' => $item->size->name ?? 'N/A',
                                'stock' => $item->qnt,            // Stock for this color-size combination
                            ];
                        }),
                    ];
                })->values(); // Use values() to get a numeric array

                // Convert collection to array to ensure it's usable in JSON
                $availableColors = $availableColors->toArray();
            }


            // Prepare data for Meta Pixel
            $fbEvent = [
                'event' => 'ViewContent',
                'data' => [
                    'content_ids' => $product->id,
                    'content_type' => $product->category ? $product->category->category_name : 'Unknown',
                    'value' => $product->getFinalPrice(), // Total value of all products in view
                    'currency' => 'BDT',
                ],
            ];

            return view('landing.pages.landing-default', [
                'product' => $product,
                'related' => $relatedProduct,
                'availableColors' => $availableColors,  // Pass colors and sizes to the view
                'config'  => $config,
                'shippings' => $shipping,
                'packages' => $this->package,
                'fbEvent' => $fbEvent,
            ]);
        }

        return abort(404, 'Product not found');
    }

    public function one()
    {
        $slug = 'winter-exclusive';
        $product = Product::where('slugs', $slug)->first();

        if ($product) {
            $config = Config::first();
            $shipping = Shipping::get();
            $relatedProduct = null;
            if ($product->category) {
                $relatedProduct = Product::where('category_id', $product->category->id)->get();
            }

            $availableColors = [];
            if ($product->attributes->isNotEmpty()) {
                $availableColors = $product->attributes->groupBy('color_id')->map(function ($items) {
                    // Get the first item in the group to fetch color and image details
                    $color = $items->first()->color;
                    $colorImage = $items->first()->image ?? 'path_to_default_image.jpg'; // Provide default image if null

                    return [
                        'id' => $color->id,              // Color ID
                        'name' => $color->name,          // Color name
                        'code' => $color->code,          // Color code (for display)
                        'image' => $colorImage,          // Image for the color
                        'inventory_id' => $items->first()->id,  // Inventory ID for the first color-size combination
                        'sizes' => $items->map(function ($item) {
                            return [
                                'inventory_id' => $item->id,       // Specific Inventory ID for this size
                                'size_id' => $item->size->id ?? null,
                                'size_name' => $item->size->name ?? 'N/A',
                                'stock' => $item->qnt,            // Stock for this color-size combination
                            ];
                        }),
                    ];
                })->values(); // Use values() to get a numeric array

                // Convert collection to array to ensure it's usable in JSON
                $availableColors = $availableColors->toArray();
            }


            // Prepare data for Meta Pixel
            $fbEvent = [
                'event' => 'ViewContent',
                'data' => [
                    'content_ids' => $product->id,
                    'content_type' => $product->category ? $product->category->category_name : 'Unknown',
                    'value' => $product->getFinalPrice(), // Total value of all products in view
                    'currency' => 'BDT',
                ],
            ];
            return view('landing.pages.landing-1', [
                'product' => $product,
                'related' => $relatedProduct,
                'availableColors' => $availableColors,  // Pass colors and sizes to the view
                'config'  => $config,
                'shippings' => $shipping,
                'packages' => $this->package,
                'fbEvent' => $fbEvent,
            ]);
        }

        return abort(404, 'Product not found');
    }

    public function two()
    {
        $slug = 'premium-semi-hoodies';
        $product = Product::where('slugs', $slug)->first();

        if ($product) {
            $config = Config::first();
            $shipping = Shipping::get();
            $relatedProduct = null;
            if ($product->category) {
                $relatedProduct = Product::where('category_id', $product->category->id)->get();
            }

            $availableColors = [];
            if ($product->attributes->isNotEmpty()) {
                $availableColors = $product->attributes->groupBy('color_id')->map(function ($items) {
                    // Get the first item in the group to fetch color and image details
                    $color = $items->first()->color;
                    $colorImage = $items->first()->image ?? 'path_to_default_image.jpg'; // Provide default image if null

                    return [
                        'id' => $color->id,              // Color ID
                        'name' => $color->name,          // Color name
                        'code' => $color->code,          // Color code (for display)
                        'image' => $colorImage,          // Image for the color
                        'inventory_id' => $items->first()->id,  // Inventory ID for the first color-size combination
                        'sizes' => $items->map(function ($item) {
                            return [
                                'inventory_id' => $item->id,       // Specific Inventory ID for this size
                                'size_id' => $item->size->id ?? null,
                                'size_name' => $item->size->name ?? 'N/A',
                                'stock' => $item->qnt,            // Stock for this color-size combination
                            ];
                        }),
                    ];
                })->values(); // Use values() to get a numeric array

                // Convert collection to array to ensure it's usable in JSON
                $availableColors = $availableColors->toArray();
            }


            // Prepare data for Meta Pixel
            $fbEvent = [
                'event' => 'ViewContent',
                'data' => [
                    'content_ids' => $product->id,
                    'content_type' => $product->category ? $product->category->category_name : 'Unknown',
                    'value' => $product->getFinalPrice(), // Total value of all products in view
                    'currency' => 'BDT',
                ],
            ];
            return view('landing.pages.landing-2', [
                'product' => $product,
                'related' => $relatedProduct,
                'availableColors' => $availableColors,  // Pass colors and sizes to the view
                'config'  => $config,
                'shippings' => $shipping,
                'packages' => $this->package,
                'fbEvent' => $fbEvent,
            ]);
        }

        return abort(404, 'Product not found');
    }

    public function order(Request $request)
    {

        $request->validate([
            'name'          => 'required|string|max:255',
            'number'        => ['required', 'regex:/^01[3-9]\d{8}$/'],
            'shipping'      => 'required',
            // 'address'       => 'required|string',
            'jela'          => 'required|string',
            'house'         => 'required|string',
            'package'       => 'required',
            // 'email'         => 'nullable|email',
            // 'quantity'      => 'required|integer|max:2'
        ], [
            'name.required'     => 'নাম অবশ্যই প্রদান করতে হবে।',
            'name.string'       => 'নাম অবশ্যই একটি স্ট্রিং হতে হবে।',
            'name.max'          => 'নামের দৈর্ঘ্য সর্বাধিক ২৫৫ অক্ষর হতে পারে।',
            'number.required'   => 'ফোন নম্বর অবশ্যই প্রদান করতে হবে।',
            'number.regex'      => 'আপনার নাম্বার টি সঠিক হয়নি দয়া করে ১১টি ডিজিট দিন | 01338-699499',
            'shipping.required' => 'শিপিং এর জন্য অবশ্যই একটি অপশন নির্বাচন করতে হবে।',
            // 'address.required'  => 'ঠিকানা অবশ্যই প্রদান করতে হবে।',
            'jela.required'     => 'জেলা অবশ্যই প্রদান করতে হবে।',
            'house.required'    => 'শিপিং এর জন্য অবশ্যই একটি অপশন নির্বাচন করতে হবে।',
            // 'email.email'       => 'ইমেলটি একটি বৈধ ইমেল ঠিকানা হতে হবে।',
            // 'quantity.required' => 'পরিমাণ অবশ্যই প্রদান করতে হবে।',
            // 'quantity.max'      => 'আপনি সর্বাধিক ২টি আইটেম অর্ডার করতে পারবেন।'
        ]);

        //If product exists
        $inventory = Inventory::find($request->inventory_id); //Finding the inventory item by id

        //Checking in exists
        if ($inventory) {
            $user = User::where('number', $request->number)->first();
            $shipping = Shipping::find($request->shipping);
            $orderID = str_pad(Order::max('id') + 1, 5, '0', STR_PAD_LEFT);
            $userId = null;
            $shippingPrice = null;
            $totalPrice = null;

            //Create user if not exists
            if (!$user) {
                $userCreated = self::createUser($request);
                if (!$userCreated) {
                    return back()->with('err', 'User not created!'); //Return if user not created
                }
                $userId = $userCreated->id;
            } else {
                if ($user->is_blocked == 1) {
                    return abort(500, 'You are blocked');
                }
                $userId = $user->id;
            }


            //Checking shipping charge
            if (!$shipping) {
                return back()->with('err', 'Shipping not created!');
            }

            $packageGrandTotal = collect($this->package)->firstWhere('id', $request->package);
            if (!$packageGrandTotal) {
                return back()->with('err', 'Package not created!');
            }
            $message = ($packageGrandTotal['id'] == 2 ? '<apan style="color:red"> Combo </span>' : '') . $request->message;

                $shippingPrice = $shipping->price;
                $totalPrice = $packageGrandTotal['price']  + $shipping->price;

                if ($inventory->product) {
                    // Prepare data for Meta Pixel before clearing the cookie
                $fbEvent = [
                    'event' => 'Purchase',
                    'data' => [
                        'content_ids' => $inventory->product->id,
                        'content_type' => 'Landing Page Product',
                        'value' => $totalPrice,
                        'currency' => 'BDT',
                    ],
                ];


                try {
                    DB::beginTransaction();
                    //Create new order
                    $order = new Order();
                    $order->user_id             = $userId;
                    $order->order_id            = $orderID;
                    $order->client_message      = $message;
                    $order->admin_message       = $packageGrandTotal['name'];
                    $order->shipping_charge     = $shippingPrice;
                    $order->price               = $totalPrice;
                    $order->order_status        = 'pending';
                    $order->payment_status      = 'processing';
                    $order->save();

                    // dd($inventory->product);
                    //Manage Inventory
                    $inventory->qnt = $inventory->qnt - $request->quantity;
                    $inventory->save();

                    // Create order product and quantity
                    $order_product = new OrderProduct();
                    $order_product->order_id    = $order->id;
                    $order_product->product_id  = $inventory->id;
                    $order_product->price       = $packageGrandTotal['price'];
                    $order_product->qnt         = 1;
                    $order_product->save();
                    // Commit the transaction if everything goes well
                    DB::commit();

                    return redirect()->route('thankyou', $order->order_id)->with([
                        'order_id' => $order->order_id,
                        'fbEvent' => $fbEvent,
                    ]);
                } catch (\Throwable $th) {
                    DB::rollBack();
                    return back()->with('err', "নেটওয়ার্কের জন্য অর্ডার দেওয়া হয়নি, দয়া করে অবার অর্ডার করুন।");
                }
            }
        }
    }

    private function createUser($request)
    {
        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->number = $request->number;
        $newUser->email = $request->email;
        $newUser->address = $request->house .', '. $request->jela;
        $newUser->password = '12345678';
        $newUser->save();
        if ($newUser) {
            return $newUser;
        } else {
            return null;
        }
    }
}
