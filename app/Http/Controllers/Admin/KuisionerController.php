<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Kuisioner\BulkDestroyKuisioner;
use App\Http\Requests\Admin\Kuisioner\DestroyKuisioner;
use App\Http\Requests\Admin\Kuisioner\IndexKuisioner;
use App\Http\Requests\Admin\Kuisioner\StoreKuisioner;
use App\Http\Requests\Admin\Kuisioner\UpdateKuisioner;
use App\Models\Kuisioner;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class KuisionerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexKuisioner $request
     * @return array|Factory|View
     */
    public function index(IndexKuisioner $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Kuisioner::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'Nama', 'Alamat', 'NoWa', 'Instagram', 'Jawaban', 'poto'],

            // set columns to searchIn
            ['id', 'Nama', 'Alamat', 'NoWa', 'Instagram', 'Jawaban', 'poto']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.kuisioner.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.kuisioner.create');

        return view('admin.kuisioner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreKuisioner $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreKuisioner $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Kuisioner
        $kuisioner = Kuisioner::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/kuisioners'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/kuisioners');
    }

    /**
     * Display the specified resource.
     *
     * @param Kuisioner $kuisioner
     * @throws AuthorizationException
     * @return void
     */
    public function show(Kuisioner $kuisioner)
    {
        $this->authorize('admin.kuisioner.show', $kuisioner);

        // TODO your code goes here
        return view('admin.kuisioner.show', [
            'kuisioner' => $kuisioner,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Kuisioner $kuisioner
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Kuisioner $kuisioner)
    {
        $this->authorize('admin.kuisioner.edit', $kuisioner);


        return view('admin.kuisioner.edit', [
            'kuisioner' => $kuisioner,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateKuisioner $request
     * @param Kuisioner $kuisioner
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateKuisioner $request, Kuisioner $kuisioner)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Kuisioner
        $kuisioner->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/kuisioners'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/kuisioners');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyKuisioner $request
     * @param Kuisioner $kuisioner
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyKuisioner $request, Kuisioner $kuisioner)
    {
        $kuisioner->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyKuisioner $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyKuisioner $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Kuisioner::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
