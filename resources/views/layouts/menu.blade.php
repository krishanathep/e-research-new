<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('admin.index') }}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>ภาพรวม</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin-members.index') }}" class="nav-link {{ request()->is('admin-members*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users"></i>
        <p>ข้อมูลผู้ใช้</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin-shoppinglist.index') }}" class="nav-link {{ request()->is('admin-shoppinglist*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tags"></i>
        <p>Shopinglist</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin-concepdevelopment.index') }}" class="nav-link {{ request()->is('admin-concepdevelopment*') ? 'active' : '' }}">
    <i class="nav-icon fas fa-file-alt"></i>
        <p>Concept Development</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin-proposaldevelopment.index') }}" class="nav-link {{ request()->is('admin-proposaldevelopment*') ? 'active' : '' }}">
    <i class="nav-icon fas fa-file-powerpoint"></i>
        <p>Proposal Development</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin-psubmission.index') }}" class="nav-link {{ request()->is('admin-psubmission*') ? 'active' : '' }}">
    <i class="nav-icon fas fa-file-powerpoint"></i>
        <p>Proposal Submission</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin-progress.index') }}" class="nav-link {{ request()->is('admin-progress') ? 'active' : '' }}">
    <i class="nav-icon fas fa-chart-line"></i>
        <p>ความก้าวหน้าโครงการ</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin-report.index') }}" class="nav-link {{ request()->is('admin-report*') ? 'active' : '' }}">
    <i class="nav-icon fas fa-chart-area"></i>
        <p>Report</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin-progressreport.index') }}" class="nav-link {{ request()->is('admin-progressreport*') ? 'active' : '' }}">
    <i class="nav-icon fas fa-chart-bar"></i>
        <p>รายงานความก้าวหน้า</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin-general.index') }}" class="nav-link {{ request()->is('admin-general*') ? 'active' : '' }}">
    <i class="nav-icon fas fa-database"></i>
        <p>ข้อมูลทั่วไป</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin-settings.index') }}" class="nav-link {{ request()->is('admin-settings*') ? 'active' : '' }}">
    <i class="nav-icon fas fa-cog"></i>
        <p>ตั้งค่า</p>
    </a>
</li>
<!--
<li class="nav-item">
    <a href="#" class="nav-link">
        <p>โครงการที่ยื่นของบประมาณ(ระบบเก่า)</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <p>โครงการที่ยื่นขออนุมัติดำเนินการ(ระบบเก่า)</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <p>ความก้าวหน้าของโครงการวิจัย(ระบบเก่า)</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <p>รายงานโครงการที่ยื่นของบประมาณ(ระบบเก่า)</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <p>รายงานโครงการที่ยื่นของบประมาณ(ระบบเก่า)</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <p>รายงานโครงการที่ยื่นขออนุมัติดำเนินการ(ระบบเก่า)</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <p>รายงานความก้าวหน้า(ระบบเก่า)</p>
    </a>
</li>
-->