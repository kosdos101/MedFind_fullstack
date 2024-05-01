@extends('layouts.master')
  <link rel="stylesheet" href="add.css">
@section('add')
  <form action="" class="add-form">
    <div class="div">
      <label for="item-name">Item Name:</label>
      <input type="text" name="item-name" id="item-name">
    </div class="div">
    <div class="div">
      <label for="item-desc">Item Description:</label>
      <input type="text" name="item-desc" id="item-desc">
    </div class="div">
    <div class="div">
      <label for="expire-date">Expire Date:</label>
      <input type="date" name="expire-date" id="expire-date">
    </div class="div">
    <div class="div">
      <label for="price">Price:</label>
      <input type="number" name="price" id="price">
    </div class="div">
    <div class="div">
      <label for="prescription-required">Prescription Required:</label>
      <input type="checkbox" name="prescription-required" id="prescription-required">
    </div class="div">
    <div class="div">
      <label for="photo">Item Photo:</label>
      <input type="file" name="photo" id="photo">
    </div class="div">
    <div class="div">
      <button type="submit">Submit</button>
    </div class="div">
  </form>
@endsection