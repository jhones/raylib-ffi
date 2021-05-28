<?php

declare(strict_types=1);

namespace Nawarian\Raylib;

interface HasRaylibPixelFormatConstants
{
    const UNCOMPRESSED_GRAYSCALE = 1;
    const UNCOMPRESSED_GRAY_ALPHA = 2;
    const UNCOMPRESSED_R5G6B5 = 3;
    const UNCOMPRESSED_R8G8B8 = 4;
    const UNCOMPRESSED_R5G5B5A1 = 5;
    const UNCOMPRESSED_R4G4B4A4 = 6;
    const UNCOMPRESSED_R8G8B8A8 = 7;
    const UNCOMPRESSED_R32 = 8;
    const UNCOMPRESSED_R32G32B32 = 9;
    const UNCOMPRESSED_R32G32B32A32 = 10;
    const COMPRESSED_DXT1_RGB = 11;
    const COMPRESSED_DXT1_RGBA= 12;
    const COMPRESSED_DXT3_RGBA = 13;
    const COMPRESSED_DXT5_RGBA = 14;
    const COMPRESSED_ETC1_RGB = 15;
    const COMPRESSED_ETC2_RGB = 16;
    const COMPRESSED_ETC2_EAC_RGBA = 17;
    const COMPRESSED_PVRT_RGB = 18;
    const COMPRESSED_PVRT_RGBA = 19;
    const COMPRESSED_ASTC_4x4_RGBA = 20;
    const COMPRESSED_ASTC_8x8_RGBA = 21;
}