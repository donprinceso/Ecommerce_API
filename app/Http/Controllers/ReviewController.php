<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Http\Resources\ReviewResource;
use App\Model\Product;
use App\Model\Review;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ReviewController extends Controller {
	/**
	 * Display a listing of the resource.
	 * * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function index($id, Product $product) {
		return ReviewResource::collection($product->find($id)->reviews);
	}

	/**
	 * Show the form for creating a new resource.
	 * * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(ReviewRequest $request, $id, product $product) {

		$review = new Review($request->all());
		$product->find($id)->reviews()->save($review);
		return response([
				'data' => new ReviewResource($review)
			], Response::HTTP_CREATED);
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Model\Review  $reviews
	 * @return \Illuminate\Http\Response
	 */
	public function show(Review $reviews) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Model\Reviews  $reviews
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Review $reviews) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Model\Review  $reviews
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Review $reviews) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Model\Review  $reviews
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Review $reviews) {
		//
	}
}
