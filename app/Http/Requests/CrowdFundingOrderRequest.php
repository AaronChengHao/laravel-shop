<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrowdFundingOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sku_id' => [
                'required',
                function( $attribute, $value, $fail ){
                    if (!$sku = \App\Models\ProductSku::find($value)) {
                        return $fail('该商品不存在');
                    }
                    // 众筹商品下单接口仅支持众筹商品的 SKU
                    if ($sku->product->type !== \App\Models\Product::TYPE_CROWDFUNDING) {
                        return $fail('该商品不支持众筹');
                    }
                    if (!$sku->product->on_sale) {
                        return $fail('该商品未上架');
                    }
                    // 还需要判断众筹本身的状态，如果不是众筹中则无法下单
                    if ($sku->product->crowdfunding->status !== \App\Models\CrowdfundingProduct::STATUS_FUNDING) {
                        return $fail('该商品众筹已结束');
                    }
                    if ($sku->stock === 0) {
                        return $fail('该商品已售完');
                    }
                    if ($this->input('amount') > 0 && $sku->stock < $this->input('amount')) {
                        return $fail('该商品库存不足');
                    }
                }
            ],
            'amount' => ['required','integer','min:1'],
            'address_id' => [
                'required',
                // Rule::exists('user_addresses', 'id')->where('user_id', $this->user()->id),
            ]
        ];
    }
}
