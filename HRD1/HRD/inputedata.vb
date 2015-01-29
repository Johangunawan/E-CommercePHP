Imports System.Data.OleDb
Imports System.IO
Public Class inputedata
    Public sEditType As String = String.Empty

    Private Sub inputedata_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        If sEditType = "New" Then
            Set_Button(1)
        Else
            Set_Button(2)
            Load_Record()
        End If
    End Sub

    Private Sub dtptl_ValueChanged(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles dtptl.ValueChanged
        If Me.dtptl.Text = " " Then
            Me.dtptl.Format = DateTimePickerFormat.Short
        End If
    End Sub

    Private Sub dtptl_KeyDown(ByVal sender As System.Object, ByVal e As System.Windows.Forms.KeyEventArgs) Handles dtptl.KeyDown
        'jika  tanggal di hapus maka , value tanggal hilang 
        If e.KeyCode = 46 Or e.KeyCode = 8 Then
            Me.dtptl.Format = DateTimePickerFormat.Custom
        End If
    End Sub

    Private Sub dtptl_MouseDown(ByVal sender As System.Object, ByVal e As System.Windows.Forms.MouseEventArgs) Handles dtptl.MouseDown
    End Sub
    Private Sub Save_Record()
        Dim conn As New OleDbConnection
        Dim cmd As New OleDbCommand
        Dim sSQL As String = String.Empty


        Try
            'menyambungkan ke  modul1
            conn = New OleDbConnection(Get_Constring)
            conn.Open()
            cmd.Connection = conn
            cmd.CommandType = CommandType.Text
            If Me.txtnama.Tag = 0 Then
                sSQL = "INSERT INTO tblData ( nama, tanggallahir, kelamin, alamat, tel_no, mobile_no, email,status_perkawinan, jumlah_anak, status_pegawai, jabatan)"
                sSQL = sSQL & "  VALUES(@name, @tanggallahir, @kelamin, @alamat, @tel_no, @mobile_no, @email, @status_perkawinan, @jumlah_anak, @status_pegawai, @jabatan)"
                cmd.CommandText = sSQL
            Else
                sSQL = "UPDATE tblData set nama = @nama, tanggallahir = @tanggallahir, kelamin = @kelamin"
                sSQL = sSQL & " ,alamat = @alamat, tel_no = @tel_no, mobile_no = @mobile_no, email =  @email where ID = @id"
                cmd.CommandText = sSQL
            End If


            cmd.Parameters.Add("@nama", OleDbType.VarChar).Value = IIf(Len(Trim(Me.txtnama.Text)) > 0, Me.txtnama.Text, DBNull.Value)
            If Me.dtptl.Text = " " Then
                MsgBox("Data Tidak Boleh Kosong")
            End If
            cmd.Parameters.Add("@tanggallahir", OleDbType.Date).Value = Me.dtptl.Text
            If Me.optperempuan.Checked Then
                cmd.Parameters.Add("@kelamin", OleDbType.Numeric).Value = 2
            Else
                cmd.Parameters.Add("@kelamin", OleDbType.Numeric).Value = 1
            End If
            If Me.optMenikah.Checked Then
                cmd.Parameters.Add("@status_perkawinan", OleDbType.Numeric).Value = 1
            Else
                cmd.Parameters.Add("@status_perkawinan", OleDbType.Numeric).Value = 2
            End If
            'set paramaters
            cmd.Parameters.Add("@alamat", OleDbType.VarChar).Value = IIf(Len(Trim(Me.txtalamat.Text)) > 0, Me.txtalamat.Text, DBNull.Value)
            cmd.Parameters.Add("@tel_no", OleDbType.VarChar).Value = IIf(Len(Trim(Me.txtTelNo.Text)) > 0, Me.txtTelNo.Text, DBNull.Value)
            cmd.Parameters.Add("@mobile_no", OleDbType.VarChar).Value = IIf(Len(Trim(Me.txtMobNo.Text)) > 0, Me.txtMobNo.Text, DBNull.Value)
            cmd.Parameters.Add("@email", OleDbType.VarChar).Value = IIf(Len(Trim(Me.txtEmail.Text)) > 0, Me.txtEmail.Text, DBNull.Value)
            cmd.Parameters.Add("@id", OleDbType.Numeric).Value = Me.txtnama.Tag
            cmd.ExecuteNonQuery()


            If Me.txtnama.Tag = 0 Then
                cmd.CommandText = "Select @@Identity"

                Me.txtnama.Tag = cmd.ExecuteScalar()
            End If
            MsgBox("Data Telah Di Simpan.")

        Catch ex As Exception
            MsgBox(ErrorToString)
        Finally
            conn.Close()
            Clear_Fields()
        End Try
    End Sub
    Private Sub Load_Record()
        Dim conn As New OleDbConnection
        Dim cmd As New OleDbCommand
        Dim dr As OleDbDataReader

        Try

            conn = New OleDbConnection(Get_Constring)
            conn.Open()
            cmd.Connection = conn
            cmd.CommandType = CommandType.Text
            cmd.CommandText = "select ID, nama, tanggallahir, kelamin, alamat, tel_no, mobile_no, email from tblData where ID= " & Me.txtnama.Tag

            dr = cmd.ExecuteReader
            If dr.HasRows Then
                While dr.Read
                    Me.txtnama.Tag = dr("id")
                    Me.txtnama.Text = IIf(Not IsDBNull(dr("nama")), dr("nama"), "")
                    If Not IsDBNull(dr("tanggallahir")) Then
                        Me.dtptl.Format = DateTimePickerFormat.Short
                        Me.dtptl.Value = dr("tanggallahir")
                    End If
                    If Not IsDBNull(dr("kelamin")) Then
                        If dr("kelamin") = 1 Then
                            Me.optpria.Checked = True
                        Else
                            Me.optperempuan.Checked = True
                        End If
                    End If
                    Me.txtalamat.Text = IIf(Not IsDBNull(dr("alamat")), dr("alamat"), "")
                    Me.txtTelNo.Text = IIf(Not IsDBNull(dr("tel_no")), dr("tel_no"), "")
                    Me.txtMobNo.Text = IIf(Not IsDBNull(dr("mobile_no")), dr("mobile_no"), "")
                    Me.txtEmail.Text = IIf(Not IsDBNull(dr("email")), dr("email"), "")
                End While
            End If

        Catch ex As Exception
            MsgBox(ErrorToString)
        Finally
            conn.Close()
        End Try
    End Sub
    Private Sub Delete_Record()
        Dim conn As New OleDbConnection
        Dim cmd As New OleDbCommand
        Dim sSQL As String = String.Empty


        Try
            conn = New OleDbConnection(Get_Constring)
            conn.Open()
            cmd.Connection = conn
            cmd.CommandType = CommandType.Text

            cmd.CommandText = "delete from tblData where ID = @ID"

            cmd.Parameters.Add("@id", OleDbType.Numeric).Value = Me.txtnama.Tag
            cmd.ExecuteNonQuery()

            MsgBox("Data Telah Di Hapus.")

        Catch ex As Exception
            MsgBox(ErrorToString)
        Finally
            conn.Close()
        End Try
    End Sub
    Private Sub btnSave_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btnSave.Click
        Dim res As New DialogResult

        res = MsgBox("Apakah Anda Ingin Menyimpan Data ?", MsgBoxStyle.YesNo, "Data")
        If res = DialogResult.Yes Then
            Save_Record()
            Set_Button(2)
        End If
    End Sub

    Private Sub btnNew_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btnNew.Click
        Set_Button(1)
        Clear_Fields()
    End Sub

    Private Sub btnClose_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btnClose.Click
        Me.Close()
    End Sub
    Private Sub Set_Button(ByVal iMode As Short)
        Select Case iMode
            Case 1
                Me.btnNew.Enabled = False
                Me.btnSave.Enabled = True
                Me.btnDelete.Enabled = False
            Case 2
                Me.btnNew.Enabled = True
                Me.btnSave.Enabled = True
                Me.btnDelete.Enabled = True
            Case 3
                Me.btnNew.Enabled = True
                Me.btnSave.Enabled = False
                Me.btnDelete.Enabled = False
        End Select
    End Sub
    Private Sub Clear_Fields()
        Me.txtnama.Tag = 0
        Me.txtnama.Text = ""
        Me.dtptl.Format = DateTimePickerFormat.Custom
        Me.optperempuan.Checked = False
        Me.optpria.Checked = False
        Me.txtalamat.Text = ""
        Me.txtTelNo.Text = ""
        Me.txtMobNo.Text = ""
        Me.txtEmail.Text = ""
    End Sub

    Private Sub btnDelete_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btnDelete.Click
        Dim res As New DialogResult

        res = MsgBox("Apa Anda Ingin Menghapus data ini ?", MsgBoxStyle.YesNo, "Data")
        If res = DialogResult.Yes Then
            Delete_Record()
            Clear_Fields()
            Set_Button(3)
        End If
    End Sub

    Private Sub GroupBox1_Enter(sender As Object, e As EventArgs) Handles GroupBox1.Enter

    End Sub

    Private Sub BtnBrowse_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles BtnBrowse.Click
        Dim bukaGambar As New Windows.Forms.OpenFileDialog
        bukaGambar.Filter = "File Gambar(*.bmp; *.jpg;*.GIF)|*.BMP;*.JPG;*.GIF|All files(*.*)|*.*"
        'tampilkan file yang berformat .jpg .bmp .gif 
        If bukaGambar.ShowDialog = Windows.Forms.DialogResult.OK Then
            Me.PictureBox.Image = Image.FromFile(bukaGambar.FileName)
            PictureBox.SizeMode = PictureBoxSizeMode.StretchImage
            'biar tampilan image pas dengan kotak image yang di sediakan
        Else
            MsgBox("Gambar harus ada ", MsgBoxStyle.Exclamation, "Error")
        End If
    End Sub
End Class