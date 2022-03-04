@extends('layouts.app')

@section('content')
<div>

  <div>
    <button type="submit">Create Ticket</button>
  </div>

  <div>
    <table>
      <tbody>
        <th>Ticket Nmber</th>
        <th>Subject</th>
        <th>Assined to</th>
        <th>Created On</th>
        <th>State</th>
        <th></th>
          @<?php foreach ($variable as $key => $value): ?>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><button><img src="trashicon"></img></button></td>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

</div>

@endsection
