CREATE TABLE dbo.lygDestination (
    DestinationCode NVARCHAR (20) PRIMARY KEY,
    DestinationName NVARCHAR (50) NULL,
);

CREATE TABLE dbo.lygStyleSize (
    StyleCode NVARCHAR (50) PRIMARY KEY,
    SizeSort INT NOT NULL,
    SizeName NVARCHAR (10) NOT NULL,

    FOREIGN KEY (SizeName) REFERENCES dbo.lygSewingOutput (SizeName),
);

CREATE TABLE dbo.lygSewingOutput (
    TrnDate date PRIMARY KEY,
    OperatorName NVARCHAR (50) NOT NULL,
    StyleCode NVARCHAR (50) NOT NULL,
    SizeName NVARCHAR (10) PRIMARY KEY,
    DestinationCode NVARCHAR (20) NOT NULL,
    QtyOutput INT NULL,

    FOREIGN KEY (DestinationCode) REFERENCES dbo.lygDestination (DestinationCode),
    FOREIGN KEY (StyleCode) REFERENCES dbo.lygStyleSize (StyleCode),
);