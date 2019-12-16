<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>

<style>
  .h-form .form-body .h-form-label {
    height: auto !important;
  }
</style>

<body>
  <?php include 'header.php'; ?>
  <div class="container-fluid">
    <div class="col s12">
      <h4 style="text-align:center;">แบบสำรวจความพึงพอใจที่มีต่อการใช้บริการ IT Outsource</h4>
      <h4 style="text-align:center;">INET ขอขอบคุณสำหรับความไว้วางใจจากท่านที่ให้ INET ได้เป็นส่วนหนึ่งในการขับเคลื่อนธุรกิจของท่าน</h4><br />
      <div class="card">

        <!-- Start Form -->
        <iframe id="iframe" name="iframe" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
        <!-- <iframe id="iframe" name="iframe" src="#" ></iframe> -->
        <form id="form_survey" method="POST">

          <!-- Detial. -->
          <div class="card-header">
            <h5>รายละเอียดผู้ให้ข้อมูล <span class="required" style="color:red;">*</span></h5>
          </div>

          <div class="card-body">
            <div class="col-sm-6">
              <div class="input-group mx-sm-5 mb-3">
                <div class="input-group-prepend">
                  <span style="width: 160px;" class="input-group-text" id="inputGroup-sizing-default">ชื่อบริษัท</span>
                </div>
                <input type="text" class="form-control" id="company_name" name="company_name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input-group mx-sm-5 mb-3">
                <div class="input-group-prepend">
                  <span style="width: 160px;" class="input-group-text" id="inputGroup-sizing-default">ชื่อผู้ให้ข้อมูล</span>
                </div>
                <input type="text" class="form-control" id="customer_name" name="customer_name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input-group mx-sm-5 mb-3">
                <div class="input-group-prepend">
                  <span style="width: 160px;" class="input-group-text" id="inputGroup-sizing-default">ตำแหน่ง</span>
                </div>
                <input type="text" class="form-control" id="customer_position" name="customer_position" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input-group mx-sm-5 mb-3">
                <div class="input-group-prepend">
                  <span style="width: 160px;" class="input-group-text" id="inputGroup-sizing-default">โทรศัพท์</span>
                </div>
                <input type="tel" class="form-control" id="customer_telephone" name="customer_telephone" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="xxxxxxxxxx" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input-group mx-sm-5 mb-3">
                <div class="input-group-prepend">
                  <span style="width: 160px;" class="input-group-text" id="inputGroup-sizing-default">อีเมล</span>
                </div>
                <input class="form-control" id="customer_email" name="customer_email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="example@example.com" type="email" pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" title="กรุณาตรวจสอบรูปแบบ E-mail" required />
              </div>
            </div>

            <!-- Start Checkbox -->
            <div class="col-sm-6">
              <div class="input-group mx-sm-5 mb-3">
                <div class="input-group-prepend">
                  <span style="width: 160px;" class="input-group-text" id="inputGroup-sizing-default">Service</span>
                </div>                
                  <div class="col">
                    <div class="grid-container" title="กรุณาเลือก Service ของท่าน" >
                        <div class="grid-item">
                          <h6>Consult</h6><br><br>
                            <p><input type="checkbox" name ="customer_service[]" id="s1_c1" value="Consult"> Consult</p>
                            <p><input type="checkbox" name ="customer_service[]" id="s1_c2" value="PM"> PM</p>
                            <p><input type="checkbox" name ="customer_service[]" id="s1_c3" value="BA"> BA</p>
                            <p><input type="checkbox" name ="customer_service[]" id="s1_c4" value="SA"> SA</p>
                            <p><input type="checkbox" name ="customer_service[]" id="s1_c5" value="SE"> SE</p>
                            <p><input type="checkbox" name ="customer_service[]" id="s1_c6" value="Tester"> Tester</p>
                        </div>
                        <div class="grid-item">
                          <h6>UX/UI</h6><br><br>
                            <p><input type="checkbox" name ="customer_service[]" id="s2_c1" value="Frontend"> Frontend</p>
                            <p><input type="checkbox" name ="customer_service[]" id="s2_c2" value="React"> React</p>
                            <p><input type="checkbox" name ="customer_service[]" id="s2_c3" value="Web Site"> Web Site</p>
                        </div>
                        <div class="grid-item">
                          <h6>Support</h6><br><br>
                            <p><input type="checkbox" name ="customer_service[]" id="s3_c1" value="IT Support"> IT Support</p>
                            <p><input type="checkbox" name ="customer_service[]" id="s3_c2" value="Business Development"> Business Development</p>
                            <p><input type="checkbox" name ="customer_service[]" id="s3_c3" value="Digital Marketing"> Digital Marketing</p>
                        </div>
                        <div class="grid-item">
                          <h6>Backend</h6><br><br>
                            <p><input type="checkbox" name ="customer_service[]" id="s4_c1" value="C#"> C#</p>
                            <p><input type="checkbox" name ="customer_service[]" id="s4_c2" value="PHP"> PHP</p>
                            <p><input type="checkbox" name ="customer_service[]" id="s4_c3" value="Python"> Python</p>
                            <p><input type="checkbox" name ="customer_service[]" id="s4_c4" value="JAVA"> JAVA</p>
                            <p><input type="checkbox" name ="customer_service[]" id="s4_c5" value=".net"> .net</p>
                            <p><input type="checkbox" name ="customer_service[]" id="s4_c6" value="SQL"> SQL</p>
                            <p><input type="checkbox" name ="customer_service[]" id="s4_c7" value="Node JS"> Node JS</p>
                            <p><input type="checkbox" name ="customer_service[]" id="s4_c8" value="API"> API</p>
                        </div>
                        <div class="grid-item">
                          <h6>OS Mobile</h6><br><br>
                          <p><input type="checkbox" name ="customer_service[]" id="s5_c1" value="IOS"> IOS</p>
                          <p><input type="checkbox" name ="customer_service[]" id="s5_c2" value="Android"> Android</p>
                        </div>
                        <div class="grid-item">
                            <h6>Network</h6><br><br>
                          <p><input type="checkbox" name ="customer_service[]"id="s6_c1" value="Implement Network"> Implement Network</p>
                          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                          <p><input type="checkbox" name ="customer_service[]"id="s7" value="อื่นๆ"> <b>อื่นๆ โปรดระบุบด้านล่าง</b></p>
                        </div>
                      </div>
                    </div>
                  </div>             
                </div>

            <!-- End Checkbox -->
              <div class="col-sm-6">
                <div class="input-group mx-sm-5 mb-3">
                  <div class="input-group-prepend">
                    <span style="width: 160px;" class="input-group-text" id="inputGroup-sizing-default">Service อื่นๆ</span>
                  </div>
                  <input type="text" class="form-control" id="customer_service_a" name="customer_service_a" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>
              </div>

              <div class="col-sm-6">
                <div class="input-group mx-sm-5 mb-3">
                  <div class="input-group-prepend">
                    <span style="width: 160px;" class="input-group-text" id="inputGroup-sizing-default">Project ที่มอบหมาย</span>
                  </div>
                  <input type="text" class="form-control" id="customer_project" name="customer_project" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>
              </div>
            </div>
          </div>
          <!-- End detial. -->
          <!-- Description  -->
          <div class="card-header">
            <h5>โปรดเลือกคำตอบที่ตรงกับระดับความพึงพอใจของท่าน พร้อมให้ข้อเสนอแนะ เพื่อบริษัท อินเทอร์เน็ตประเทศไทย จำกัด (มหาชน)</h5>
            <h5>จะนำไปปรับปรุงการบริการให้ดียิ่งขึ้น โดยท่านจะใช้เวลาราว 3-5 นาที ในการทำแบบสำรวจความพึงพอใจนี้</h5>
          </div>
          <!-- End Description  -->

          <!-- Q1. -->
          <div class="card-body">
            <h5>1. ด้านบุคลากรที่ให้บริการ Outsource </h5><br/>
            <table class="table table-bordered table-responsive">
              <thead class="thead-light">
                <tr style="text-align:center;">
                  <th scope="col">รายการประเมิน<br><br></th>
                  <th scope="col" style="width: 7%;">มากที่สุด<br>(5)</th>
                  <th scope="col" style="width: 7%;">มาก<br>(4)</th>
                  <th scope="col" style="width: 7%;">ปานกลาง<br>(3)</th>
                  <th scope="col" style="width: 7%;">น้อย<br>(2)</th>
                  <th scope="col" style="width: 7%;">น้อยที่สุด<br>(1)</th>
                </tr>
              </thead>
              <tbody>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">1. มีความรู้ และความเชี่ยวชาญในการทำงาน</th>
                  <td><input type="radio" name="q1_s1" id="q1_s1_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q1_s1" id="q1_s1_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q1_s1" id="q1_s1_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q1_s1" id="q1_s1_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q1_s1" id="q1_s1_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">2. มีทักษะความชำนาญในงานที่ได้รับมอบหมาย</th>
                  <td><input type="radio" name="q1_s2" id="q1_s2_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q1_s2" id="q1_s2_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q1_s2" id="q1_s2_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q1_s2" id="q1_s2_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q1_s2" id="q1_s2_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">3. มีความเอาใจใส่ กระตือรือร้น และพร้อมที่จะให้บริการ</th>
                  <td><input type="radio" name="q1_s3" id="q1_s3_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q1_s3" id="q1_s3_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q1_s3" id="q1_s3_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q1_s3" id="q1_s3_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q1_s3" id="q1_s3_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">4. มีความรับผิดชอบในการทำงานให้เสร็จตรงตามเวลาที่กำหนด</th>
                  <td><input type="radio" name="q1_s4" id="q1_s4_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q1_s4" id="q1_s4_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q1_s4" id="q1_s4_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q1_s4" id="q1_s4_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q1_s4" id="q1_s4_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">5. มีการแต่งกายสุภาพเรียบร้อย มีความตรงต่อเวลา และมีวินัยที่ดี</th>
                  <td><input type="radio" name="q1_s5" id="q1_s5_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q1_s5" id="q1_s5_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q1_s5" id="q1_s5_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q1_s5" id="q1_s5_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q1_s5" id="q1_s5_c1" data-col="1" value="1" required></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- End Q1. -->
          <!-- Q2. -->
          <div class="card-body">
            <h5>2. ด้านผู้ดูแลบุคลากร Outsource (Supervisor)</h5><br />

            <table class="table table-bordered table-responsive">
              <thead class="thead-light">
                <tr style="text-align:center;">
                  <th scope="col">รายการประเมิน<br><br></th>
                  <th scope="col" style="width: 7%;">มากที่สุด<br>(5)</th>
                  <th scope="col" style="width: 7%;">มาก<br>(4)</th>
                  <th scope="col" style="width: 7%;">ปานกลาง<br>(3)</th>
                  <th scope="col" style="width: 7%;">น้อย<br>(2)</th>
                  <th scope="col" style="width: 7%;">น้อยที่สุด<br>(1)</th>
                </tr>
              </thead>
              <tbody>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">1. ให้คำแนะนำ อธิบาย และตอบข้อซักถามอย่างชัดเจนและตรงประเด็น</th>
                  <td><input type="radio" name="q2_s1" id="q2_s1_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q2_s1" id="q2_s1_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q2_s1" id="q2_s1_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q2_s1" id="q2_s1_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q2_s1" id="q2_s1_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">2. มีทักษะความชำนาญในงานที่ได้รับมอบหมาย</th>
                  <td><input type="radio" name="q2_s2" id="q2_s2_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q2_s2" id="q2_s2_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q2_s2" id="q2_s2_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q2_s2" id="q2_s2_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q2_s2" id="q2_s2_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">3. มีการประสานงานได้อย่างมีประสิทธิภาพ สามารถติดต่อได้เสมอ ทันการณ์</th>
                  <td><input type="radio" name="q2_s3" id="q2_s3_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q2_s3" id="q2_s3_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q2_s3" id="q2_s3_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q2_s3" id="q2_s3_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q2_s3" id="q2_s3_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">4. มีการออกแบบวางแผนงานอย่างเป็นระบบ</th>
                  <td><input type="radio" name="q2_s4" id="q2_s4_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q2_s4" id="q2_s4_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q2_s4" id="q2_s4_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q2_s4" id="q2_s4_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q2_s4" id="q2_s4_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">5. มีการแต่งกายสุภาพเรียบร้อย มีความตรงต่อเวลา และมีวินัยที่ดี</th>
                  <td><input type="radio" name="q2_s5" id="q2_s5_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q2_s5" id="q2_s5_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q2_s5" id="q2_s5_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q2_s5" id="q2_s5_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q2_s5" id="q2_s5_c1" data-col="1" value="1" required></td>
                </tr>

              </tbody>
            </table>
          </div>
          <!-- End Q2. -->

          <!-- Q3. -->
          <div class="card-body">
            <h5>3. ด้านคุณภาพการให้บริการ</h5><br />

            <table class="table table-bordered table-responsive">
              <thead class="thead-light">
                <tr style="text-align:center;">
                  <th scope="col">รายการประเมิน<br><br></th>
                  <th scope="col" style="width: 7%;">มากที่สุด<br>(5)</th>
                  <th scope="col" style="width: 7%;">มาก<br>(4)</th>
                  <th scope="col" style="width: 7%;">ปานกลาง<br>(3)</th>
                  <th scope="col" style="width: 7%;">น้อย<br>(2)</th>
                  <th scope="col" style="width: 7%;">น้อยที่สุด<br>(1)</th>
                </tr>
              </thead>
              <tbody>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">1. ได้รับการส่งมอบงานตรงตามกำหนดเวลา</th>
                  <td><input type="radio" name="q3_s1" id="q3_s1_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q3_s1" id="q3_s1_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q3_s1" id="q3_s1_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q3_s1" id="q3_s1_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q3_s1" id="q3_s1_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">2. ได้รับการบริการ ผลงานที่คุ้มค่ากับงบประมาณที่ใช้ไป</th>
                  <td><input type="radio" name="q3_s2" id="q3_s2_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q3_s2" id="q3_s2_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q3_s2" id="q3_s2_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q3_s2" id="q3_s2_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q3_s2" id="q3_s2_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">3. ความพึงพอใจโดยภาพรวมต่องานที่ได้รับ</th>
                  <td><input type="radio" name="q3_s3" id="q3_s3_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q3_s3" id="q3_s3_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q3_s3" id="q3_s3_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q3_s3" id="q3_s3_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q3_s3" id="q3_s3_c1" data-col="1" value="1" required></td>
                </tr>
                <tr style="text-align:center;">
                  <th scope="row" style="text-align:left;">4. รายงาน เอกสารประกอบการให้บริการมีความถูกต้องเรียบร้อย</th>
                  <td><input type="radio" name="q3_s4" id="q3_s4_c5" data-col="5" value="5" required></td>
                  <td><input type="radio" name="q3_s4" id="q3_s4_c4" data-col="4" value="4" required></td>
                  <td><input type="radio" name="q3_s4" id="q3_s4_c3" data-col="3" value="3" required></td>
                  <td><input type="radio" name="q3_s4" id="q3_s4_c2" data-col="2" value="2" required></td>
                  <td><input type="radio" name="q3_s4" id="q3_s4_c1" data-col="1" value="1" required></td>
                </tr>

              </tbody>
            </table>
          </div>
          <!-- End Q3. -->

          <!-- Comment. -->
          <div class="card-header">
            <h5>ข้อเสนอแนะ ข้อคิดเห็นเพิ่มเติม</h5>
          </div>

          <div class="card-body">
            <label class="container">
              <textarea class="form-control" name="q4_comment" id="q4_comment" style="width:80%; height:50%;"></textarea>
            </label>
          </div>
          <!-- End Comment. -->

          <!-- Button submit -->
          <div class="card-body">
            <div class="form-action" style="text-align:center;">
              <button class="btn btn-outline-success" type="submit" name="submit" value="submit">ส่งแบบสอบถาม</button>
            </div>
          </div>

        </form>
        <!-- End form -->

      </div>
    </div>
  </div><br />
  <!-- End container-fluid -->
  <?php include 'footer.php'; ?>

  <!-- script submit -->
  <script>
    $("#form_survey").on("submit", function(e) {

      e.preventDefault();


      $.ajax({
        url: "checksubmit.php",
        type: "post",
        data: $(this).serialize(),
        success: function(result) {
          jQuery("#form_survey input[type=radio]").prop("checked", false);
          console.log("result= " + result);
          if (result == "1") {
            swal({
              position: 'center',
              type: 'success',
              title: 'บันทึกข้อมูลเรียบร้อย',
              showConfirmButton: true,
            }).then((result) => {
              if (result.value) {
                window.location = "thankyou.php";
              }
            });
          } else {
            swal({
              position: 'center',
              type: 'warning',
              title: 'กรุณาใส่คำตอบให้ครบ',
              showConfirmButton: true,
            });
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          swal(
            'เกิดข้อผิดพลาด!',
            'ลองอีกครั้ง!',
            'error'
          );
        }
      });

    });
  </script>
  <!-- end script submit -->

</body>

</html>