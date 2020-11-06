USE [bibliotecas]
GO
/****** Object:  StoredProcedure [dbo].[SP_ConsultarAutores]    Script Date: 05/11/2020 20:37:38 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

ALTER PROCEDURE [dbo].[SP_ConsultarAutores]
	@accion varchar(255),
	@id int
AS

BEGIN

	--SELECT * from autores;
	select @accion as accion, @id as numero
END
