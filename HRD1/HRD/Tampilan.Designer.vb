<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class tabeldata
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Dim DataGridViewCellStyle1 As System.Windows.Forms.DataGridViewCellStyle = New System.Windows.Forms.DataGridViewCellStyle()
        Dim DataGridViewCellStyle2 As System.Windows.Forms.DataGridViewCellStyle = New System.Windows.Forms.DataGridViewCellStyle()
        Dim DataGridViewCellStyle3 As System.Windows.Forms.DataGridViewCellStyle = New System.Windows.Forms.DataGridViewCellStyle()
        Dim resources As System.ComponentModel.ComponentResourceManager = New System.ComponentModel.ComponentResourceManager(GetType(tabeldata))
        Me.dtgResult = New System.Windows.Forms.DataGridView()
        Me.Label2 = New System.Windows.Forms.Label()
        Me.btnClose = New System.Windows.Forms.Button()
        Me.btnAdd = New System.Windows.Forms.Button()
        Me.btnSearch = New System.Windows.Forms.Button()
        Me.Label1 = New System.Windows.Forms.Label()
        Me.cboSearchBy = New System.Windows.Forms.ComboBox()
        Me.txtSearch = New System.Windows.Forms.TextBox()
        Me.btnr = New System.Windows.Forms.Button()
        Me.Column1 = New System.Windows.Forms.DataGridViewTextBoxColumn()
        Me.Column2 = New System.Windows.Forms.DataGridViewTextBoxColumn()
        Me.Column3 = New System.Windows.Forms.DataGridViewTextBoxColumn()
        Me.Column4 = New System.Windows.Forms.DataGridViewTextBoxColumn()
        Me.Mobile_no = New System.Windows.Forms.DataGridViewTextBoxColumn()
        Me.emial = New System.Windows.Forms.DataGridViewTextBoxColumn()
        Me.status_perkawinan = New System.Windows.Forms.DataGridViewTextBoxColumn()
        Me.jumlah_anak = New System.Windows.Forms.DataGridViewTextBoxColumn()
        Me.Column5 = New System.Windows.Forms.DataGridViewTextBoxColumn()
        Me.jabatan = New System.Windows.Forms.DataGridViewTextBoxColumn()
        CType(Me.dtgResult, System.ComponentModel.ISupportInitialize).BeginInit()
        Me.SuspendLayout()
        '
        'dtgResult
        '
        Me.dtgResult.AllowUserToAddRows = False
        Me.dtgResult.AllowUserToDeleteRows = False
        DataGridViewCellStyle1.BackColor = System.Drawing.SystemColors.Control
        Me.dtgResult.AlternatingRowsDefaultCellStyle = DataGridViewCellStyle1
        Me.dtgResult.BackgroundColor = System.Drawing.Color.SkyBlue
        Me.dtgResult.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize
        Me.dtgResult.Columns.AddRange(New System.Windows.Forms.DataGridViewColumn() {Me.Column1, Me.Column2, Me.Column3, Me.Column4, Me.Mobile_no, Me.emial, Me.status_perkawinan, Me.jumlah_anak, Me.Column5, Me.jabatan})
        DataGridViewCellStyle2.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft
        DataGridViewCellStyle2.BackColor = System.Drawing.SystemColors.Window
        DataGridViewCellStyle2.Font = New System.Drawing.Font("Microsoft Sans Serif", 8.25!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        DataGridViewCellStyle2.ForeColor = System.Drawing.SystemColors.ControlText
        DataGridViewCellStyle2.SelectionBackColor = System.Drawing.Color.Gold
        DataGridViewCellStyle2.SelectionForeColor = System.Drawing.Color.Black
        DataGridViewCellStyle2.WrapMode = System.Windows.Forms.DataGridViewTriState.[False]
        Me.dtgResult.DefaultCellStyle = DataGridViewCellStyle2
        Me.dtgResult.EditMode = System.Windows.Forms.DataGridViewEditMode.EditOnF2
        Me.dtgResult.Location = New System.Drawing.Point(12, 53)
        Me.dtgResult.Name = "dtgResult"
        Me.dtgResult.ReadOnly = True
        DataGridViewCellStyle3.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft
        DataGridViewCellStyle3.BackColor = System.Drawing.SystemColors.Control
        DataGridViewCellStyle3.Font = New System.Drawing.Font("Microsoft Sans Serif", 8.25!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        DataGridViewCellStyle3.ForeColor = System.Drawing.SystemColors.WindowText
        DataGridViewCellStyle3.SelectionBackColor = System.Drawing.Color.Gold
        DataGridViewCellStyle3.SelectionForeColor = System.Drawing.SystemColors.HighlightText
        DataGridViewCellStyle3.WrapMode = System.Windows.Forms.DataGridViewTriState.[True]
        Me.dtgResult.RowHeadersDefaultCellStyle = DataGridViewCellStyle3
        Me.dtgResult.RowHeadersWidth = 25
        Me.dtgResult.SelectionMode = System.Windows.Forms.DataGridViewSelectionMode.FullRowSelect
        Me.dtgResult.Size = New System.Drawing.Size(889, 238)
        Me.dtgResult.TabIndex = 8
        '
        'Label2
        '
        Me.Label2.AutoSize = True
        Me.Label2.Location = New System.Drawing.Point(12, 303)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(310, 13)
        Me.Label2.TabIndex = 15
        Me.Label2.Text = "Double click di colom untuk Edit Data atau melihat data lengkap"
        '
        'btnClose
        '
        Me.btnClose.Location = New System.Drawing.Point(821, 298)
        Me.btnClose.Name = "btnClose"
        Me.btnClose.Size = New System.Drawing.Size(75, 23)
        Me.btnClose.TabIndex = 14
        Me.btnClose.Text = "Keluar"
        Me.btnClose.UseVisualStyleBackColor = True
        '
        'btnAdd
        '
        Me.btnAdd.Location = New System.Drawing.Point(740, 298)
        Me.btnAdd.Name = "btnAdd"
        Me.btnAdd.Size = New System.Drawing.Size(75, 23)
        Me.btnAdd.TabIndex = 13
        Me.btnAdd.Text = "Tambah"
        Me.btnAdd.UseVisualStyleBackColor = True
        '
        'btnSearch
        '
        Me.btnSearch.Image = CType(resources.GetObject("btnSearch.Image"), System.Drawing.Image)
        Me.btnSearch.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft
        Me.btnSearch.Location = New System.Drawing.Point(828, 15)
        Me.btnSearch.Name = "btnSearch"
        Me.btnSearch.Size = New System.Drawing.Size(67, 23)
        Me.btnSearch.TabIndex = 10
        Me.btnSearch.Text = "Cari"
        Me.btnSearch.TextAlign = System.Drawing.ContentAlignment.MiddleRight
        Me.btnSearch.UseVisualStyleBackColor = True
        '
        'Label1
        '
        Me.Label1.AutoSize = True
        Me.Label1.Location = New System.Drawing.Point(599, 20)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(88, 13)
        Me.Label1.TabIndex = 11
        Me.Label1.Text = "Cari Berdasarkan"
        '
        'cboSearchBy
        '
        Me.cboSearchBy.FormattingEnabled = True
        Me.cboSearchBy.Items.AddRange(New Object() {"Nama", "ID"})
        Me.cboSearchBy.Location = New System.Drawing.Point(693, 16)
        Me.cboSearchBy.Name = "cboSearchBy"
        Me.cboSearchBy.Size = New System.Drawing.Size(121, 21)
        Me.cboSearchBy.TabIndex = 10
        '
        'txtSearch
        '
        Me.txtSearch.Location = New System.Drawing.Point(12, 16)
        Me.txtSearch.Name = "txtSearch"
        Me.txtSearch.Size = New System.Drawing.Size(420, 20)
        Me.txtSearch.TabIndex = 9
        '
        'btnr
        '
        Me.btnr.Location = New System.Drawing.Point(657, 297)
        Me.btnr.Name = "btnr"
        Me.btnr.Size = New System.Drawing.Size(75, 23)
        Me.btnr.TabIndex = 16
        Me.btnr.Text = "Refresh"
        Me.btnr.UseVisualStyleBackColor = True
        '
        'Column1
        '
        Me.Column1.AutoSizeMode = System.Windows.Forms.DataGridViewAutoSizeColumnMode.DisplayedCells
        Me.Column1.DataPropertyName = "ID"
        Me.Column1.HeaderText = "ID Pegawai"
        Me.Column1.Name = "Column1"
        Me.Column1.ReadOnly = True
        Me.Column1.Width = 87
        '
        'Column2
        '
        Me.Column2.AutoSizeMode = System.Windows.Forms.DataGridViewAutoSizeColumnMode.DisplayedCells
        Me.Column2.DataPropertyName = "nama"
        Me.Column2.HeaderText = "Nama"
        Me.Column2.MaxInputLength = 3200
        Me.Column2.Name = "Column2"
        Me.Column2.ReadOnly = True
        Me.Column2.Width = 60
        '
        'Column3
        '
        Me.Column3.AutoSizeMode = System.Windows.Forms.DataGridViewAutoSizeColumnMode.DisplayedCells
        Me.Column3.DataPropertyName = "alamat"
        Me.Column3.HeaderText = "Alamat"
        Me.Column3.Name = "Column3"
        Me.Column3.ReadOnly = True
        Me.Column3.Width = 64
        '
        'Column4
        '
        Me.Column4.AutoSizeMode = System.Windows.Forms.DataGridViewAutoSizeColumnMode.DisplayedCells
        Me.Column4.DataPropertyName = "tel_no"
        Me.Column4.HeaderText = "No Telepone"
        Me.Column4.Name = "Column4"
        Me.Column4.ReadOnly = True
        Me.Column4.Width = 94
        '
        'Mobile_no
        '
        Me.Mobile_no.DataPropertyName = "mobile_no"
        Me.Mobile_no.HeaderText = "Mobile Phone"
        Me.Mobile_no.Name = "Mobile_no"
        Me.Mobile_no.ReadOnly = True
        '
        'emial
        '
        Me.emial.AutoSizeMode = System.Windows.Forms.DataGridViewAutoSizeColumnMode.DisplayedCells
        Me.emial.DataPropertyName = "email"
        Me.emial.HeaderText = "Email"
        Me.emial.Name = "emial"
        Me.emial.ReadOnly = True
        Me.emial.Width = 57
        '
        'status_perkawinan
        '
        Me.status_perkawinan.DataPropertyName = "status_perkawinan"
        Me.status_perkawinan.HeaderText = "Status Perkawinan"
        Me.status_perkawinan.Name = "status_perkawinan"
        Me.status_perkawinan.ReadOnly = True
        '
        'jumlah_anak
        '
        Me.jumlah_anak.DataPropertyName = "jumlah_anak"
        Me.jumlah_anak.HeaderText = "Jumlah Anak"
        Me.jumlah_anak.Name = "jumlah_anak"
        Me.jumlah_anak.ReadOnly = True
        '
        'Column5
        '
        Me.Column5.DataPropertyName = "status_pegawai"
        Me.Column5.HeaderText = "Status Pegawai"
        Me.Column5.Name = "Column5"
        Me.Column5.ReadOnly = True
        '
        'jabatan
        '
        Me.jabatan.DataPropertyName = "jabatan"
        Me.jabatan.HeaderText = "Jabatan"
        Me.jabatan.Name = "jabatan"
        Me.jabatan.ReadOnly = True
        '
        'tabeldata
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(909, 338)
        Me.Controls.Add(Me.btnr)
        Me.Controls.Add(Me.dtgResult)
        Me.Controls.Add(Me.Label2)
        Me.Controls.Add(Me.btnClose)
        Me.Controls.Add(Me.btnAdd)
        Me.Controls.Add(Me.btnSearch)
        Me.Controls.Add(Me.Label1)
        Me.Controls.Add(Me.cboSearchBy)
        Me.Controls.Add(Me.txtSearch)
        Me.Name = "tabeldata"
        Me.Text = "Sistem HRD"
        CType(Me.dtgResult, System.ComponentModel.ISupportInitialize).EndInit()
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub
    Friend WithEvents dtgResult As System.Windows.Forms.DataGridView
    Friend WithEvents Label2 As System.Windows.Forms.Label
    Friend WithEvents btnClose As System.Windows.Forms.Button
    Friend WithEvents btnAdd As System.Windows.Forms.Button
    Friend WithEvents btnSearch As System.Windows.Forms.Button
    Friend WithEvents Label1 As System.Windows.Forms.Label
    Friend WithEvents cboSearchBy As System.Windows.Forms.ComboBox
    Friend WithEvents txtSearch As System.Windows.Forms.TextBox
    Friend WithEvents btnr As System.Windows.Forms.Button
    Friend WithEvents Column1 As System.Windows.Forms.DataGridViewTextBoxColumn
    Friend WithEvents Column2 As System.Windows.Forms.DataGridViewTextBoxColumn
    Friend WithEvents Column3 As System.Windows.Forms.DataGridViewTextBoxColumn
    Friend WithEvents Column4 As System.Windows.Forms.DataGridViewTextBoxColumn
    Friend WithEvents Mobile_no As System.Windows.Forms.DataGridViewTextBoxColumn
    Friend WithEvents emial As System.Windows.Forms.DataGridViewTextBoxColumn
    Friend WithEvents status_perkawinan As System.Windows.Forms.DataGridViewTextBoxColumn
    Friend WithEvents jumlah_anak As System.Windows.Forms.DataGridViewTextBoxColumn
    Friend WithEvents Column5 As System.Windows.Forms.DataGridViewTextBoxColumn
    Friend WithEvents jabatan As System.Windows.Forms.DataGridViewTextBoxColumn

End Class
