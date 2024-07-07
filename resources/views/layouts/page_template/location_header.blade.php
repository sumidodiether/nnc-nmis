<!-- header -->
<div style="display:flex">
                    <div class="form-group col">
                        <label for="exampleFormControlInput1">Barangay:</label>
                        <select name="barangay_id" class="form-control"  > 
                            @foreach($brgy as $brgys)
                                    <option value="{{ $brgys->id }}" <?php echo auth()->user()->barangay_id == $brgys->id  ? "selected":"" ?>  >{{ $brgys->barangay }}</option>

                            @endforeach
                        </select>
                        <!-- <input type="text" class="form-control" name="barangay_id" value="{{Auth()->user()->barangay}}"> -->
                    </div>
                    <div class="form-group col">
                        <label for="exampleFormControlInput1">Municipality/City:</label>
                        <select name="municipal_id" class="form-control" required disabled> 
                            @foreach($mun as $muns)
                                    <option value="{{ $muns->id }}" <?php echo auth()->user()->city_municipal == $muns->id  ? "selected":"" ?>  >{{ $muns->municipal }}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="exampleFormControlInput1">Province:</label>

                        <select name="province_id" class="form-control" required disabled>
                            @foreach($prov as $provs)
                                    <option value="{{ $provs->id }}" <?php echo auth()->user()->Province == $provs->id  ? "selected":"" ?>  >{{ $provs->province }}</option>

                            @endforeach
                        </select>
                        <!-- <input type="text" class="form-control" name="province_id" value="{{auth()->user()->Province}}"> -->
                        <input type="hidden" class="form-control" name="region_id" value="{{auth()->user()->Region}}">
                    
                    </div>

                </div>
                <br>
                <div style="display:flex">

                    <div class="form-group col">
                        <label for="dateMonitoring">Date of Monitoring:<span style="color:red">*</span></label>
                        <input type="date" class="form-control" id="dateMonitoring" name="dateMonitoring"   >
                        @error('dateMonitoring')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col">
                        <label for="periodCovereda">Period Covered:<span style="color:red">*</span></label>
                        <!-- <input type="date" class="form-control" id="exampleFormControlInput1" date-format="mm-yyyy"
                            name="periodCovereda"> -->
                            <select class="form-control" id="periodCovereda" name="periodCovereda"  >
                              <option>Select Year</option>
                              <?php foreach($years as $year) : ?>
                                <option value="{{ $year }}">{{ $year }}</option>
                              <?php endforeach; ?>
                            </select>
                        @error('periodCovereda')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <!-- endheader -->