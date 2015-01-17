Imports System.Data.OleDb
Imports System.IO
Public Class tabeldata

    Private Sub btnAdd_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btnAdd.Click
        Dim frm As New inputedata
        frm.sEditType = "New"
        frm.ShowDialog()
        frm = Nothing
    End Sub

    Private Sub btnClose_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btnClose.Click
        Me.Close()
    End Sub

    Private Sub frmContactList_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        Me.cboSearchBy.SelectedIndex = 0
    End Sub

    Private Sub btnSearch_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btnSearch.Click
        Search_Record()
    End Sub
    Private Sub Search_Record()
        Dim conn As New OleDbConnection
        Dim cmd As New OleDbCommand
        Dim da As New OleDbDataAdapter
        Dim dt As New DataTable
        Dim sSQL As String = String.Empty

        Try
            conn = New OleDbConnection(Get_Constring)
            conn.Open()
            cmd.Connection = conn
            cmd.CommandType = CommandType.Text
            sSQL = "SELECT * FROM tblData"
            If Me.cboSearchBy.Text = "Nama" Then
                sSQL = sSQL & " where nama like '%" & Me.txtSearch.Text & "%'"
            Else
                sSQL = sSQL & " where ID = " & Me.txtSearch.Text
            End If
            cmd.CommandText = sSQL
            da.SelectCommand = cmd
            da.Fill(dt)

            Me.dtgResult.DataSource = dt
            If dt.Rows.Count = 0 Then
                MsgBox("No record found!")
            End If

        Catch ex As Exception
            MsgBox(ErrorToString)
        Finally
            conn.Close()
        End Try
    End Sub


    Private Sub dtgResult_DoubleClick(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles dtgResult.DoubleClick
        If Me.dtgResult.RowCount > 0 Then
            Dim frm As New inputedata
            frm.sEditType = "Exist"
            frm.txtnama.Tag = Me.dtgResult.Item(0, Me.dtgResult.CurrentRow.Index).Value
            frm.ShowDialog()
            frm = Nothing
        End If
    End Sub

    Private Sub btnr_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btnr.Click
        re()
    End Sub
    Private Sub re()
        Dim conn As New OleDbConnection
        Dim cmd As New OleDbCommand
        Dim da As New OleDbDataAdapter
        Dim dt As New DataTable
        Dim sSQL As String = String.Empty

        Try
            conn = New OleDbConnection(Get_Constring)
            conn.Open()
            cmd.Connection = conn
            cmd.CommandType = CommandType.Text
            sSQL = "SELECT * FROM tblData"
            cmd.CommandText = sSQL
            da.SelectCommand = cmd
            da.Fill(dt)

            Me.dtgResult.DataSource = dt
            If dt.Rows.Count = 0 Then
                MsgBox("No record found!")
            End If

        Catch ex As Exception
            MsgBox(ErrorToString)
        Finally
            conn.Close()
        End Try
    End Sub

    Private Sub dtgResult_CellContentClick(ByVal sender As System.Object, ByVal e As System.Windows.Forms.DataGridViewCellEventArgs) Handles dtgResult.CellContentClick

    End Sub
End Class
