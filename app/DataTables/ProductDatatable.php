<?php

namespace App\DataTables;

use App\Models\Product;
use App\Models\Category;
use Yajra\DataTables\Services\DataTable;

class ProductDatatable extends DataTable
{
    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return datatables($this->query())
                ->addColumn('product_category', function($row){
                    if($row->categories->count()) {
                        $categories = $row->categories->map(function($cat) {
                            return $cat->category->name;
                        });
                        return implode(",", $categories->toArray());
                    }
                    return "";
                })
                ->make(true);
    }
    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $models = Product::with('categories.category')->select('products.*');
        if(request()->get('product_category')) {
            $product_category = request()->get('product_category');
            $models->leftJoin('prodcat', 'prodcat.product_id', '=', 'products.id');
            $models->leftJoin('cat.categories as categories','prodcat.category_id','=','categories.id');
            $models->where('categories.name', 'like', '%'.$product_category.'%');
        }
        return $this->applyScopes($models);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                        ->parameters(['searching' => false])
                        ->columns($this->getColumns())
                        ->ajax('');
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return ['name','status'];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Product';
    }
}
