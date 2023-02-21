<!--== Start Page Header Area ==-->
<div class="page-header-area bg-img-news" data-bg="<?=BASE_URL?>public/assets/img/career/slider-index-02.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-inner">
                    <div class="page-header-content">
                        <h2>Karir</h2>
                        <p><i class="mdi mdi-format-quote-open"></i><em>Great things in business are never done by one person. They're done by a team of people.</em><i class="mdi mdi-format-quote-close"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->
<div class="row">
    <div class="col-12 justify-content-center">
        <h3 class="text-center m-sm-5">Open Position In : </h3>
    </div>
    <div class="col-5"></div>
    <div class="col-2 d-flex justify-content-center" style="margin-top:-15px">
        <select name="list_career" id="list_career" class="form-select d-flex justify-content-center mx-auto">
            <option value="All Branch">Semua Cabang</option>
            <option value="Head Office">Head Office </option>
            <option value="Singapura">Singapura </option>
            <option value="Jakarta">Jakarta </option>
            <option value="Siak">Siak </option>
            <option value="Bengkalis">Bengkalis </option>
            <option value="Kampar">Kampar </option>
        </select>
    </div>
    <div class="col-5"></div>
    <div class="col-12 d-flex justify-content-center">
        <div class="listjob" style="position:relative;">
            <a href="javascript:void(0)" class="fw-bold selected-career" onclick="getList(this)">All Position</a>
            <a href="javascript:void(0)" class="" onclick="getList(this)">Direktur</a>
            <a href="javascript:void(0)" class="" onclick="getList(this)">Sr. Manager</a>
            <a href="javascript:void(0)" class="" onclick="getList(this)">Manager</a>
            <a href="javascript:void(0)" class="" onclick="getList(this)">Asst.Manager</a>
            <a href="javascript:void(0)" class="" onclick="getList(this)">Supervisor</a>
            <a href="javascript:void(0)" class="" onclick="getList(this)">Asst.Supervisor</a>
            <!-- <a href="javascript:void(0)" class="" onclick="getList(this)">Asst</a> -->
            <a href="javascript:void(0)" class="" onclick="getList(this)">Staff</a>
            <a href="javascript:void(0)" class="" onclick="getList(this)">Admin</a>
        </div>
    </div>
</div>
<!-- Button trigger modal -->
<!--== Start Team Area Wrapper ==-->
<div class="team-page-area-wrapper bg-offwhite pt-5 mt-5 " >
    <div class="container">
        <div class="row mtn-30">
            <?php foreach($data['data'] as $list):?>
            <div class="col-sm-6 col-lg-3 titlejob <?=$list['position']?>" id="<?=$list['location']?>">
                <div class="team-mem-item">
                    <figure class="member-pic">
                        <img src="<?=BASE_URL?>public/assets/img/career/careerbg.webp" alt="Team-Businex"/>
                    </figure>
                    <div class="member-info">
                        <h5><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$list['careerid']?>" class="stretched-link"><?=$list['title']?></a></h5>
                        <span class="designation"><i class="fa fa-map-marker text-dark"></i> <?=$list['location']?></span>
                    </div>
                </div>
            </div>
            
            <?php endforeach;?>
            <!-- <div class="col-sm-6 col-lg-3 titlejob" id="Semunai">
                <div class="team-mem-item">
                    <figure class="member-pic">
                        <img src="<?=BASE_URL?>public/assets/img/team/02.jpg" alt="Team-Businex"/>
                    </figure>
                    <div class="member-info">
                        <h5><a href="team-details.html" class="stretched-link">Estate Manager</a></h5>
                        <span class="designation">Kampar</span>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</div>
<!--== End Team Area Wrapper ==-->

<div class="bg-offwhite" style="padding-top:100px"></div>
<!-- Modal -->
<?php foreach($data['data'] as $row):?>
    <div class="modal fade" id="exampleModal<?=$row['careerid']?>" tabindex="-1" aria-labelledby="exampleModal<?=$row['careerid']?>Title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"><?=$row['title']?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?=$row['requirement']?>
                    <hr />
                    <?=$row['jobdesc']?>
                    <p></p>
                    <?=$row['notes']?>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary d-flex" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-light" onclick="applyjob(<?=$row['careerid']?>)">Apply Job</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach;?>
<?php
$scriptfooter = <<<EOF
<script type="text/javascript">
function showhide(value) {
    const opt = document.querySelectorAll('.titlejob')
    const selected = document.querySelector('.selected-career')
    if(value=='All Branch' && selected.text == 'All Position') {
        $(opt).fadeIn()
        return
    }
    for(i=0; i<opt.length; i++) {
        if(opt[i].id != value) $(opt[i]).fadeOut()
        else {
            if(selected.text!='All Position') {
                // find location
                let arr = (opt[i].className)
                let toShow = arr.split(" ")
                let lastarr = toShow.slice(-1)
                // console.log(lastarr)
                if(opt[i].classList.contains(selected.text)) {
                    $(opt[i]).fadeIn()
                }
                else $(opt[i]).fadeOut()
            }
            if(selected.text == 'All Position') $(opt[i]).fadeIn()
        }
        if(value=='All Branch') {
            let arr = (opt[i].className)
            let toShow = arr.split(" ")
            let lastarr = toShow.slice(-1)
            if(opt[i].classList.contains(selected.text)) {
                console.log(opt[i])
                $(opt[i]).fadeIn()
            }
            else $(opt[i]).fadeOut()
        }
    }
    
}
const selectButton = document.querySelector('#list_career');
selectButton.addEventListener('change', (e) => {
    // const result = document.querySelector('.result')
    // console.log(e.target.value)
    showhide(e.target.value);
})

function getList(value) {
    const list = document.querySelector('.listjob')
    const child = list.querySelectorAll('a')
    const target = value
    // console.log(value.text)
    for(i in child) {
        $(child).removeClass('fw-bold')
        $(child).removeClass('selected-career')
    }
    $(target).addClass('fw-bold')
    $(target).addClass('selected-career')
    getPosition(value.text)
}

function getPosition(value) {
    // get list_career
    const listUnit = document.querySelector('#list_career')
    const val = listUnit.value

    const opt = document.querySelectorAll('.titlejob')
    showhide(val)
}
</script>
EOF;
?>
<script type="text/javascript">
    function applyjob(val) {
        window.location.href = "<?=BASE_URL?>info/career/careerpath-"+val;
    }
</script>