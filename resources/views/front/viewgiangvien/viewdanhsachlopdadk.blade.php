@extends('front.layout') @section('content-giangvien')
<table class="table table-bordered m-table m-table--border-brand m-table--head-bg-brand">
	<thead>
		<tr>

			<th>
				Id lớp môn học
			</th>
			<th>
				Tên Bộ Môn
			</th>
			<th>
				Số lượng Sinh viên đã đk
			</th>
			<th>Settting</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($dataMergen as $item )
		<tr>

			<td>
				{{$item->IdLopMonHoc}}
			</td>
			<td>
				{{$item->TenMonBoMon}}
			</td>
			<td>
				{{$item->CoutSinhvien}}
			</td>
			<td>
				<a idlopmonhoc="{{$item->IdLopMonHoc}}" href="#" class="btn btn-deauft btn-ViewListSinhVien" data-toggle="modal" data-target="#viewlistsinhvien">Hiện thị danh sách</a>
				<a routelink="{{url('GetLinkApiLinkBaiTap/'.$item->IdLopMonHoc.'')}}" idlopmonhoc="{{$item->IdLopMonHoc}}" href="#" class="btn btn-deauft btn-ViewLinkBaiTap"
				    data-toggle="modal" data-target="#viewlistlinkbaitap">Link BT Giảng Viên Đã Giao</a>
				<a class="giaobaitap" idlopmonhoc="{{$item->IdLopMonHoc}}" data-toggle="modal" data-target="#giaobaitap" class="btn btn-deauft" href="#">Giao Bài tập</a>
			</td>
		</tr>
		@endforeach


	</tbody>
</table>
{{-- modal view list sinh vien --}}

<div class="modal fade show" id="viewlistsinhvien" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					List Sinh Viên
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						×
					</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="m-section__content">
					<table class="table table-sm m-table m-table--head-bg-brand">
						<thead class="thead-inverse">
							<tr>
								<th>
									ID Sinh Viên
								</th>
								<th>
									Tên Sinh Viên
								</th>
								<th>
									Giới Tính
								</th>
								<th>
									Khóa học
								</th>
							</tr>
						</thead>
						<tbody class="viewlistsinhvien">

						</tbody>
					</table>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					Close
				</button>

			</div>
		</div>
	</div>
</div>

{{-- list link bai tap --}}
<div class="modal fade show" id="viewlistlinkbaitap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="">
					List Link Bài tập
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						×
					</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="m-section__content">
					<table class="table table-sm m-table m-table--head-bg-brand">
						<thead class="thead-inverse">
							<tr>
								<th>
									Id
								</th>
								<th>
									Id Link Bài tập
								</th>

								<th>
									Link Bài Tập
								</th>

							</tr>
						</thead>
						<tbody class="viewlistlinkbaitap">

						</tbody>
					</table>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					Close
				</button>

			</div>
		</div>
	</div>
</div>
<div class="modal fade show" id="giaobaitap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="">
					Giao bai tap
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						×
					</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="m-section__content">
					<form id="formThemLinkBaiTap" idlopmonhoc="">
						<div class="form-group m-form__group row">
							<label class="col-lg-2 col-form-label">
								Link:
							</label>
							<div class="col-lg-6">
								<input name="linkbaitap" class="form-control m-input" placeholder="Link môn">
								<span class="m-form__help">
									Nhập Link Bài tập
								</span>
							</div>
							<div class="col-lg-4">	<button type="submit" class="btn btn-primary">
							Thêm
						</button></div>
						</div>

					

					</form>

				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					Close
				</button>

			</div>
		</div>
	</div>
</div>
@endsection